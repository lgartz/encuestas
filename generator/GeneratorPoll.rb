require "erb"
require "rexml/document"

ARGV[0] = "../encuestas/xml/encuesta.xml"

def readPollFileXml ( pathFile )
  # Se realiza la lectura del documento XML base para realizar las encuestas
  xml = REXML::Document.new(File.open(pathFile))
  # Se realiza la lectura de cada una las encuestas
  xml.root.each_element("poll") do | pollChild |
    title = pollChild.attributes["title"].to_s
    name = pollChild.attributes["name"].to_s
    namePage = pollChild.attributes["namePage"].to_s
    namePhp = namePage+"_process"
    dbname = pollChild.attributes["dbname"].to_s
    body = ""
    sql = ""
    listLocUlId = []
    listDatesId = []
    hashValidate = Hash.new
    hashNames = Hash.new
    # Se realiza la lectura de cada una las preguntas
    pollChild.each_element("question") do | questionChild |
      type = questionChild.attributes["type"]
      number = questionChild.attributes["number"]
      required = questionChild.attributes["required"]
      ask = questionChild.elements["ask"].attributes["value"]
      resultado = getResultElementForm(questionChild,type,number,required,ask,listLocUlId,listDatesId,hashNames)
      body << "#{resultado}\n"
      resultSQL = getResultSQL(ask,type,number,questionChild)
      sql << "#{resultSQL}\n"
      if required == "true"
        getResultHashElementsRequired(type,number,hashValidate,questionChild)
      end
    end
    print hashNames
    erbJavaScript = getTemplate("../encuestas/templates/poll_script.template",binding)
    createFile("../encuestas/javascript/",".js",namePage,erbJavaScript)
    erbHtml = getTemplate("../encuestas/templates/poll.template",binding)
    createFile("../encuestas/",".php",namePage,erbHtml)
    erbSQL = getTemplate("../encuestas/templates/sql.template",binding)
    createFile("../encuestas/sql/",".sql",namePage,erbSQL)    
    erbPhp = getTemplate("../encuestas/templates/process.template",binding)
    createFile("../encuestas/",".php",namePhp,erbPhp)
  end
end

# Metodo encargado de retornar el codigo sql para cada una de las preguntas generadas
def getResultSQL(ask,type,number,questionChild)
  resultado = case type
  when "smu_rb"
    then getSqlSmu_rb(ask,type,number,questionChild)
  when "smu_s"
    then getSqlSmu_s(ask,type,number,questionChild)
  when "smr_cb"
    then getSqlSmr_cb(ask,type,number,questionChild)
  when "smr_sm"
    then getSqlSmr_sm(ask,type,number,questionChild)
  when "mmr_rb"
    then ""
  when "mmr_cb"
    then ""
  when "mmr_s"
    then ""
  when "loc_ul"
    then ""
  when "eru_rb"
    then ""
  when "psu_t"
    then ""
  when "psm_t"
    then ""
  when "psc_ta"
    then ""
  when "pfh_s"
    then ""
  when "psh_s"
    then ""
  end
  return resultado
end

def getSqlSmu_rb (ask,type,number,questionChild)
  name="#{type}_#{number}"
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/sql_smu_rb.template",binding)
  return erbTemplate.to_s  
end

def getSqlSmu_s (ask,type,number,questionChild)
  name="#{type}_#{number}"
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/sql_smu_s.template",binding)
  return erbTemplate.to_s  
end

def getSqlSmr_cb (ask,type,number,questionChild)
  name="#{type}_#{number}"
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/sql_smr_cb.template",binding)
  return erbTemplate.to_s
end

def getSqlSmr_sm (ask,type,number,questionChild)
  name="#{type}_#{number}"
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/sql_smr_sm.template",binding)
  return erbTemplate.to_s
end

# Metodo encargado de generar la validacion de los campos de las preguntas psm_t
def generateComparePsm_t (list)
  hash = Hash.new
  list.each{|value|
    val = value.split('_')
    key = val[0]+"_"+val[1]+"_"+val[2]
    if hash[key]
      hash[key] = hash[key]+"$("+'"'+"input[name='"+value+"'"+"]"+'"'+").val().trim() == "+'"'+'"'+"||"
    else
      hash[key] = "$("+'"'+"input[name='"+value+"'"+"]"+'"'+").val().trim() == "+'"'+'"'+"||"
    end
  }
  return hash
end

# Metodo encargado de generar la validacion de los campos de las preguntas mmr_rb
def generateCompareMmr_rb (list)
  hash = Hash.new
  list.each{|value|
    val = value.split('_')
    key = val[0]+"_"+val[1]+"_"+val[2]
    if hash[key]
      hash[key] = hash[key]+"$("+'"'+"input[name='"+value+"'"+"]:checked"+'"'+").length == 0"+"||"
    else
      hash[key] = "$("+'"'+"input[name='"+value+"'"+"]:checked"+'"'+").length == 0"+"||"
    end
  }
  return hash
end

# Metodo encargado de generar la validacion de los campos de las preguntas mmr_cb
def generateCompareMmr_cb (list)
  hash = Hash.new
  list.each{|value|
    val = value.split('_')
    key = val[0]+"_"+val[1]+"_"+val[2]
    if hash[key]
      hash[key] = hash[key]+"$("+'"'+"input[name='"+value+"[]'"+"]:checked"+'"'+").length == 0"+"||"
    else
      hash[key] = "$("+'"'+"input[name='"+value+"[]'"+"]:checked"+'"'+").length == 0"+"||"
    end
  }
  return hash
end

# Metodo encargado de generar la validacion de los campos de las preguntas mmr_s
def generateCompareMmr_s (list)
  hash = Hash.new
  list.each{|value|
    val = value.split('_')
    key = val[0]+"_"+val[1]+"_"+val[2]
    if hash[key]
      hash[key] = hash[key]+"$("+'"'+"select[name='"+value+"'"+"]"+'"'+").val() == "+'"'+'"'+"||"
    else
      hash[key] = "$("+'"'+"select[name='"+value+"'"+"]"+'"'+").val() == "+'"'+'"'+"||"
    end
  }
  return hash
end

# Metodo encargado de generar la validacion de los campos de los distintos tipos de preguntas
def getResultHashElementsRequired(type,number,hashValidate,questionChild)
  case type
  when "smu_rb"
    name="#{type}_#{number}"
    getContainsKey(hashValidate,type,name)
  when "smu_s"
    name="#{type}_#{number}"
    getContainsKey(hashValidate,type,name)
  when "smr_cb"
    name="#{type}_#{number}"
    getContainsKey(hashValidate,type,name)
  when "smr_sm"
    name="#{type}_#{number}"
    getContainsKey(hashValidate,type,name)
  when "mmr_rb"
    listRows = getListOptions(questionChild.elements["rows"],"option")
    for i in 1..listRows.length
      name="#{type}_#{number}_#{i}"
      getContainsKey(hashValidate,type,name)
    end
  when "mmr_cb"
    listRows = getListOptions(questionChild.elements["rows"],"option")
    for i in 1..listRows.length
      name="#{type}_#{number}_#{i}"
      getContainsKey(hashValidate,type,name)
    end
  when "mmr_s"
    listRows = getListOptions(questionChild.elements["rows"],"option")
    hashColumnas = getListOptionSelect(questionChild)
    tamRow = listRows.length
    tamColumn = hashColumnas.keys.length
    for i in 1..tamRow
      for j in 1..tamColumn
        name="#{type}_#{number}_#{i}_#{j}"
        getContainsKey(hashValidate,type,name)
      end
    end
  when "eru_rb"
    name="#{type}_#{number}"
    getContainsKey(hashValidate,type,name)
  when "psu_t"
    name="#{type}_#{number}"
    getContainsKey(hashValidate,type,name)
  when "psm_t"
    listOptions = getListOptions(questionChild,"option")
    for i in 1..listOptions.first["value"].to_i
      name="#{type}_#{number}_#{i}"
      getContainsKey(hashValidate,type,name)
    end
  when "psc_ta"
    name="#{type}_#{number}"
    getContainsKey(hashValidate,type,name)
  when "pfh_s"
    name="#{type}_#{number}"
    getContainsKey(hashValidate,type,name)
  when "psh_s"
    name="#{type}_#{number}"
    getContainsKey(hashValidate,type,name)
  end
end

# Metodo encargado de obtener el listado de id de las llaves autogeneradas de cada pregunta
def getContainsKey (hashValidate,type,name)
  if hashValidate[type]
    hashValidate[type].push(name)
  else
    list = []
    list.push(name)
    hashValidate[type] = list
  end
end

# Metodo encargado de retornar el codigo html para cada una de las preguntas generadas
def getResultElementForm(questionChild,type,number,required,ask,listLocUlId,listDatesId,hashNames)
  resultado = case type
  when "smu_rb"
    then getsmu_rb(questionChild,type,number,required,ask,hashNames)
  when "smu_s"
    then getsmu_s(questionChild,type,number,required,ask,hashNames)
  when "smr_cb"
    then getsmr_cb(questionChild,type,number,required,ask,hashNames)
  when "smr_sm"
    then getsmr_sm(questionChild,type,number,required,ask,hashNames)
  when "mmr_rb"
    then getmmr_rb(questionChild,type,number,required,ask,getListOptions(questionChild.elements["rows"],"option"),getListOptions(questionChild.elements["columns"],"option"),hashNames)
  when "mmr_cb"
    then getmmr_cb(questionChild,type,number,required,ask,getListOptions(questionChild.elements["rows"],"option"),getListOptions(questionChild.elements["columns"],"option"),hashNames)
  when "mmr_s"
    then getmmr_s(questionChild,type,number,required,ask,getListOptions(questionChild.elements["rows"],"option"),hashNames)
  when "loc_ul"
    then getloc_ul(questionChild,listLocUlId,type,number,required,ask,hashNames)
  when "eru_rb"
    then geteru_rb(questionChild,type,number,required,ask,hashNames)
  when "psu_t"
    then getpsu_t(questionChild,type,number,required,ask,hashNames)
  when "psm_t"
    then getpsm_t(questionChild,type,number,required,ask,hashNames)
  when "psc_ta"
    then getpsc_ta(questionChild,type,number,required,ask,hashNames)
  when "pfh_s"
    then getpfh_s(questionChild,listDatesId,type,number,required,ask,hashNames)
  when "psh_s"
    then getpsh_s(questionChild,type,number,required,ask,hashNames)
  end
  return resultado
end

# Método encargado de obtener de un determinado elemento el listado de opciones
def getListOptions ( element, value )
  listOptions = []
  element.each_element( value ) do |option|
    has = Hash.new
    option.attributes.each_attribute do |attri|
      has[attri.expanded_name] = attri.value
    end
    listOptions.push(has)
  end
  return listOptions
end

# Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta smu_rb.template
def getsmu_rb(questionChild,type,number,required,ask,hashNames)
  name="#{type}_#{number}"
  getContainsKey(hashNames,type,name)
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/smu_rb.template",binding)
  return erbTemplate.to_s
end

# Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta smu_s.template
def getsmu_s(questionChild,type,number,required,ask,hashNames)
  name="#{type}_#{number}"
  getContainsKey(hashNames,type,name)
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/smu_s.template",binding)
  return erbTemplate.to_s
end

# Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta smr_cb.template
def getsmr_cb (questionChild,type,number,required,ask,hashNames)
  name="#{type}_#{number}"
  getContainsKey(hashNames,type,name)
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/smr_cb.template",binding)
  return erbTemplate.to_s
end

# Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta smr_sm.template
def getsmr_sm (questionChild,type,number,required,ask,hashNames)
  name="#{type}_#{number}"
  getContainsKey(hashNames,type,name)
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/smr_sm.template",binding)
  return erbTemplate.to_s
end

# Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta loc_ul.template
def getloc_ul (questionChild, listLocUlId,type,number,required,ask,hashNames)
  listLocUlId.push("#{type}_#{number}")
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/loc_ul.template",binding)
  return erbTemplate.to_s
end

# Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta psm_t.template
def getpsm_t (questionChild,type,number,required,ask,hashNames)
  listOptions = getListOptions(questionChild,"option")
  for i in 1..listOptions.first["value"].to_i
    name="#{type}_#{number}_#{i}"
    getContainsKey(hashNames,type,name)
  end  
  erbTemplate = getTemplate("../encuestas/templates/psm_t.template",binding)
  return erbTemplate.to_s
end

# Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta mmr_rb.template
def getmmr_rb (questionChild,type,number,required,ask,listRows,listColumns,hashNames)
  for i in 1..listRows.length
    name="#{type}_#{number}_#{i}"
    getContainsKey(hashNames,type,name)
  end
  erbTemplate = getTemplate("../encuestas/templates/mmr_rb.template",binding)
  return erbTemplate.to_s
end

# Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta mmr_cb.template
def getmmr_cb (questionChild,type,number,required,ask,listRows,listColumns,hashNames)
  for i in 1..listRows.length
    name="#{type}_#{number}_#{i}"
    getContainsKey(hashNames,type,name)
  end
  erbTemplate = getTemplate("../encuestas/templates/mmr_cb.template",binding)
  return erbTemplate.to_s
end

# Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta eru_rb.template
def geteru_rb (questionChild,type,number,required,ask,hashNames)
  name="#{type}_#{number}"
  getContainsKey(hashNames,type,name)
  has = Hash.new
  questionChild.elements["range"].attributes.each_attribute do |range|
    has[range.expanded_name] = range.value
  end
  erbTemplate = getTemplate("../encuestas/templates/eru_rb.template",binding)
  return erbTemplate.to_s
end

# Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta psu_t.template
def getpsu_t (questionChild,type,number,required,ask,hashNames)
  name="#{type}_#{number}"
  getContainsKey(hashNames,type,name)
  erbTemplate = getTemplate("../encuestas/templates/psu_t.template",binding)
  return erbTemplate.to_s
end

# Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta psc_ta.template
def getpsc_ta (questionChild,type,number,required,ask,hashNames)
  name="#{type}_#{number}"
  getContainsKey(hashNames,type,name)
  erbTemplate = getTemplate("../encuestas/templates/psc_ta.template",binding)
  return erbTemplate.to_s
end

# Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta pfh_s.template
def getpfh_s (questionChild, listDatesId,type,number,required,ask,hashNames)
  getContainsKey(hashNames,type,"#{type}_date_#{number}")
  getContainsKey(hashNames,type,"#{type}_hour_#{number}")
  getContainsKey(hashNames,type,"#{type}_minute_#{number}")
  listDatesId.push("#{type}_date_#{number}")
  erbTemplate = getTemplate("../encuestas/templates/pfh_s.template",binding)
  return erbTemplate.to_s
end

# Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta psh_s.template
def getpsh_s (questionChild,type,number,required,ask,hashNames)
  getContainsKey(hashNames,type,"#{type}_hour_#{number}")
  getContainsKey(hashNames,type,"#{type}_minute_#{number}")
  erbTemplate = getTemplate("../encuestas/templates/psh_s.template",binding)
  return erbTemplate.to_s
end

# Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta mmr_s.template
def getmmr_s (questionChild,type,number,required,ask,listRows,hashNames)
  hashColumnas = getListOptionSelect(questionChild)
  tamRow = listRows.length
  tamColumn = hashColumnas.keys.length
  for i in 1..tamRow
    for j in 1..tamColumn
      name="#{type}_#{number}_#{i}_#{j}"
      getContainsKey(hashNames,type,name)
    end
  end
  erbTemplate = getTemplate("../encuestas/templates/mmr_s.template",binding)
  return erbTemplate.to_s
end

# Metodo encargado de obtener el listado de opciones de una pregunta
def getListOptionSelect(questionChild)
  has = Hash.new
  questionChild.elements["columns"].each_element do |columns|
    columnName = columns.attributes["value"]
    listOption = getListOptions(columns,"label")
    has[columnName] = listOption
  end
  return has
end

# Metodo encargado de obtener la plantilla que se empleara para la generacion del codigo
def getTemplate (pathTemplate, binding)
  fileTemplate = File.new( pathTemplate )
  filehtml = fileTemplate.read
  erb = ERB.new filehtml
  return erb.result(binding)
end

# Metodo encargado de crear el archivo generado
def createFile (pathFile,extension,nameFile, erb)
  fileName = pathFile+nameFile+extension
  newFile = File.open(fileName,"w")
  newFile.print erb
  newFile.close
end

if ARGV[0]
  readPollFileXml ( ARGV[0] )
end