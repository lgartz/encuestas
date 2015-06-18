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
    body = ""
    listLocUlId = []
    listDatesId = []
    hashValidate = Hash.new
    # Se realiza la lectura de cada una las preguntas
    pollChild.each_element("question") do | questionChild |
      type = questionChild.attributes["type"]
      number = questionChild.attributes["number"]
      required = questionChild.attributes["required"]
      ask = questionChild.elements["ask"].attributes["value"]
      resultado = getResultElementForm(questionChild,type,number,required,ask,listLocUlId,listDatesId)
      body << "#{resultado}\n"
      if required == "true"
        getResultHashElementsRequired(type,number,hashValidate,questionChild)
      end
    end
    print hashValidate.to_s+"\n"
    erbJavaScript = getTemplate("../encuestas/templates/poll_script.template",binding)
    createFile("../encuestas/javascript/",".js",namePage,erbJavaScript)
    erbHtml = getTemplate("../encuestas/templates/poll.template",binding)
    createFile("../encuestas/",".php",namePage,erbHtml)
  end
end

def getResultHashElementsRequired(type,number,hashValidate,questionChild)
  case type
  when "smu_rb"
    name="#{type}_#{number}"
    getContainsKey(hashValidate,type,number,name)
  when "smu_s"
    name="#{type}_#{number}"
    getContainsKey(hashValidate,type,number,name)
  when "smr_cb"
    name="#{type}_#{number}"
    getContainsKey(hashValidate,type,number,name)
  when "smr_sm"
    name="#{type}_#{number}"
    getContainsKey(hashValidate,type,number,name)
  when "mmr_rb"
    listRows = getListOptions(questionChild.elements["rows"],"option")
    for i in 1..listRows.length
      name="#{type}_#{number}_#{i}"
      getContainsKey(hashValidate,type,number,name)
    end
  when "mmr_cb"
    listRows = getListOptions(questionChild.elements["rows"],"option")
    for i in 1..listRows.length
      name="#{type}_#{number}_#{i}"
      getContainsKey(hashValidate,type,number,name)
    end
  when "mmr_s"
    listRows = getListOptions(questionChild.elements["rows"],"option")
    hashColumnas = getListOptionSelect(questionChild)
    tamRow = listRows.length
    tamColumn = hashColumnas.keys.length
    for i in 1..tamRow
      for j in 1..tamColumn
        name="#{type}_#{number}_#{i}_#{j}"
        getContainsKey(hashValidate,type,number,name)
      end
    end
  when "eru_rb"
    name="#{type}_#{number}"
    getContainsKey(hashValidate,type,number,name)
  when "psu_t"
    name="#{type}_#{number}"
    getContainsKey(hashValidate,type,number,name)
  when "psm_t"
    listOptions = getListOptions(questionChild,"option")
    for i in 1..listOptions.first["value"].to_i
      name="#{type}_#{number}_#{i}"
      getContainsKey(hashValidate,type,number,name)
    end
  when "psc_ta"
    name="#{type}_#{number}"
    getContainsKey(hashValidate,type,number,name)
  when "pfh_s"
    name="#{type}_#{number}"
    getContainsKey(hashValidate,type,number,name)
  end
end

def getContainsKey (hashValidate,type,number,name)
  if hashValidate[type]
    hashValidate[type].push(name)
  else
    list = []
    list.push(name)
    hashValidate[type] = list
  end
end

def getResultElementForm(questionChild,type,number,required,ask,listLocUlId,listDatesId)
  resultado = case type
  when "smu_rb"
    then getsmu_rb(questionChild,type,number,required,ask)
  when "smu_s"
    then getsmu_s(questionChild,type,number,required,ask)
  when "smr_cb"
    then getsmr_cb(questionChild,type,number,required,ask)
  when "smr_sm"
    then getsmr_sm(questionChild,type,number,required,ask)
  when "mmr_rb"
    then getmmr_rb(questionChild,type,number,required,ask,getListOptions(questionChild.elements["rows"],"option"),getListOptions(questionChild.elements["columns"],"option"))
  when "mmr_cb"
    then getmmr_cb(questionChild,type,number,required,ask,getListOptions(questionChild.elements["rows"],"option"),getListOptions(questionChild.elements["columns"],"option"))
  when "mmr_s"
    then getmmr_s(questionChild,type,number,required,ask,getListOptions(questionChild.elements["rows"],"option"))
  when "loc_ul"
    then getloc_ul(questionChild,listLocUlId,type,number,required,ask)
  when "eru_rb"
    then geteru_rb(questionChild,type,number,required,ask)
  when "psu_t"
    then getpsu_t(questionChild,type,number,required,ask)
  when "psm_t"
    then getpsm_t(questionChild,type,number,required,ask)
  when "psc_ta"
    then getpsc_ta(questionChild,type,number,required,ask)
  when "pfh_s"
    then getpfh_s(questionChild,listDatesId,type,number,required,ask)
  when "psh_s"
    then getpsh_s(questionChild,type,number,required,ask)
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

def getsmu_rb(questionChild,type,number,required,ask)
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/smu_rb.template",binding)
  return erbTemplate.to_s
end

def getsmu_s(questionChild,type,number,required,ask)
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/smu_s.template",binding)
  return erbTemplate.to_s
end

def getsmr_cb (questionChild,type,number,required,ask)
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/smr_cb.template",binding)
  return erbTemplate.to_s
end

def getsmr_sm (questionChild,type,number,required,ask)
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/smr_sm.template",binding)
  return erbTemplate.to_s
end

def getloc_ul (questionChild, listLocUlId,type,number,required,ask)
  listLocUlId.push("#{type}_#{number}")
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/loc_ul.template",binding)
  return erbTemplate.to_s
end

def getpsm_t (questionChild,type,number,required,ask)
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/psm_t.template",binding)
  return erbTemplate.to_s
end

def getmmr_rb (questionChild,type,number,required,ask,listRows,listColumns)
  erbTemplate = getTemplate("../encuestas/templates/mmr_rb.template",binding)
  return erbTemplate.to_s
end

def getmmr_cb (questionChild,type,number,required,ask,listRows,listColumns)
  erbTemplate = getTemplate("../encuestas/templates/mmr_cb.template",binding)
  return erbTemplate.to_s
end

def geteru_rb (questionChild,type,number,required,ask)
  has = Hash.new
  questionChild.elements["range"].attributes.each_attribute do |range|
    has[range.expanded_name] = range.value
  end
  erbTemplate = getTemplate("../encuestas/templates/eru_rb.template",binding)
  return erbTemplate.to_s
end

def getpsu_t (questionChild,type,number,required,ask)
  erbTemplate = getTemplate("../encuestas/templates/psu_t.template",binding)
  return erbTemplate.to_s
end

def getpsc_ta (questionChild,type,number,required,ask)
  erbTemplate = getTemplate("../encuestas/templates/psc_ta.template",binding)
  return erbTemplate.to_s
end

def getpfh_s (questionChild, listDatesId,type,number,required,ask)
  listDatesId.push("#{type}_date_#{number}")
  erbTemplate = getTemplate("../encuestas/templates/pfh_s.template",binding)
  return erbTemplate.to_s
end

def getpsh_s (questionChild,type,number,required,ask)
  erbTemplate = getTemplate("../encuestas/templates/psh_s.template",binding)
  return erbTemplate.to_s
end

def getmmr_s (questionChild,type,number,required,ask,listRows)
  hashColumnas = getListOptionSelect(questionChild)
  erbTemplate = getTemplate("../encuestas/templates/mmr_s.template",binding)
  return erbTemplate.to_s
end

def getListOptionSelect(questionChild)
  has = Hash.new
  questionChild.elements["columns"].each_element do |columns|
    columnName = columns.attributes["value"]
    listOption = getListOptions(columns,"label")
    has[columnName] = listOption
  end
  return has
end

def getTemplate (pathTemplate, binding)
  fileTemplate = File.new( pathTemplate )
  filehtml = fileTemplate.read
  erb = ERB.new filehtml
  return erb.result(binding)
end

def createFile (pathFile,extension,nameFile, erb)
  fileName = pathFile+nameFile+extension
  newFile = File.open(fileName,"w")
  newFile.print erb
  newFile.close
end

if ARGV[0]
  readPollFileXml ( ARGV[0] )
end