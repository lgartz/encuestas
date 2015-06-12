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
    # Se realiza la lectura de cada una las preguntas
    pollChild.each_element("question") do | questionChild |
      type = questionChild.attributes["type"]
      resultado = case type
      when "smu_rb"
        then getsmu_rb(questionChild)
      when "smu_s"
        then getsmu_s(questionChild)
      when "smr_cb"
        then getsmr_cb(questionChild)
      when "smr_sm"
        then getsmr_sm(questionChild)
      when "mmr_rb"
        then getmmr_rb(questionChild)
      when "mmr_cb"
        then getmmr_cb(questionChild)
      when "mmr_s"
        then getmmr_s(questionChild)
      when "loc_ul"
        then getloc_ul(questionChild)
      when "eru_rb"
        then geteru_rb(questionChild)
      when "psu_t"
        then getpsu_t(questionChild)
      when "psm_t"
        then getpsm_t(questionChild)
      when "psc_ta"
        then getpsc_ta(questionChild)
      when "pfh_s"
        then getpfh_s(questionChild)
      when "psh_s"
        then getpsh_s(questionChild)
      end
      body << "#{resultado}\n"
    end
    erbHtml = getTemplate("../encuestas/templates/poll.template",binding)
    createFile("../encuestas/",".php",namePage,erbHtml)
  end
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

def getsmu_rb(questionChild)
  number = questionChild.attributes["number"]
  required = questionChild.attributes["required"]
  type = questionChild.attributes["type"]
  ask = questionChild.elements["ask"].attributes["value"].to_s
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/smu_rb.template",binding)
  return erbTemplate.to_s
end

def getsmu_s(questionChild)
  number = questionChild.attributes["number"]
  required = questionChild.attributes["required"]
  type = questionChild.attributes["type"]
  ask = questionChild.elements["ask"].attributes["value"].to_s
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/smu_s.template",binding)
  return erbTemplate.to_s
end

def getsmr_cb (questionChild)
  number = questionChild.attributes["number"]
  required = questionChild.attributes["required"]
  type = questionChild.attributes["type"]
  ask = questionChild.elements["ask"].attributes["value"].to_s
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/smr_cb.template",binding)
  return erbTemplate.to_s
end

def getsmr_sm (questionChild)
  number = questionChild.attributes["number"]
  required = questionChild.attributes["required"]
  type = questionChild.attributes["type"]
  ask = questionChild.elements["ask"].attributes["value"].to_s
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/smr_sm.template",binding)
  return erbTemplate.to_s
end

def getloc_ul (questionChild)
  number = questionChild.attributes["number"]
  required = questionChild.attributes["required"]
  type = questionChild.attributes["type"]
  ask = questionChild.elements["ask"].attributes["value"].to_s
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/loc_ul.template",binding)
  return erbTemplate.to_s
end

def getpsm_t (questionChild)
  number = questionChild.attributes["number"]
  required = questionChild.attributes["required"]
  type = questionChild.attributes["type"]
  ask = questionChild.elements["ask"].attributes["value"].to_s
  listOptions = getListOptions(questionChild,"option")
  erbTemplate = getTemplate("../encuestas/templates/psm_t.template",binding)
  return erbTemplate.to_s
end

def getmmr_rb (questionChild)
  number = questionChild.attributes["number"]
  required = questionChild.attributes["required"]
  type = questionChild.attributes["type"]
  ask = questionChild.elements["ask"].attributes["value"].to_s
  listRows = getListOptions(questionChild.elements["rows"],"option")
  listColumns = getListOptions(questionChild.elements["columns"],"option")
  erbTemplate = getTemplate("../encuestas/templates/mmr_rb.template",binding)
  return erbTemplate.to_s
end

def getmmr_cb (questionChild)
  number = questionChild.attributes["number"]
  required = questionChild.attributes["required"]
  type = questionChild.attributes["type"]
  ask = questionChild.elements["ask"].attributes["value"].to_s
  listRows = getListOptions(questionChild.elements["rows"],"option")
  listColumns = getListOptions(questionChild.elements["columns"],"option")
  erbTemplate = getTemplate("../encuestas/templates/mmr_cb.template",binding)
  return erbTemplate.to_s
end

def geteru_rb (questionChild)
  number = questionChild.attributes["number"]
  required = questionChild.attributes["required"]
  type = questionChild.attributes["type"]
  ask = questionChild.elements["ask"].attributes["value"].to_s
  has = Hash.new
  questionChild.elements["range"].attributes.each_attribute do |range|
    has[range.expanded_name] = range.value
  end
  erbTemplate = getTemplate("../encuestas/templates/eru_rb.template",binding)
  return erbTemplate.to_s
end

def getpsu_t (questionChild)
  number = questionChild.attributes["number"]
  required = questionChild.attributes["required"]
  type = questionChild.attributes["type"]
  ask = questionChild.elements["ask"].attributes["value"].to_s
  erbTemplate = getTemplate("../encuestas/templates/psu_t.template",binding)
  return erbTemplate.to_s
end

def getpsc_ta (questionChild)
  number = questionChild.attributes["number"]
  required = questionChild.attributes["required"]
  type = questionChild.attributes["type"]
  ask = questionChild.elements["ask"].attributes["value"].to_s
  erbTemplate = getTemplate("../encuestas/templates/psc_ta.template",binding)
  return erbTemplate.to_s
end

def getpfh_s (questionChild)
  number = questionChild.attributes["number"]
  required = questionChild.attributes["required"]
  type = questionChild.attributes["type"]
  ask = questionChild.elements["ask"].attributes["value"].to_s
  erbTemplate = getTemplate("../encuestas/templates/pfh_s.template",binding)
  return erbTemplate.to_s
end

def getpsh_s (questionChild)
  number = questionChild.attributes["number"]
  required = questionChild.attributes["required"]
  type = questionChild.attributes["type"]
  ask = questionChild.elements["ask"].attributes["value"].to_s
  erbTemplate = getTemplate("../encuestas/templates/pfh_s.template",binding)
  return erbTemplate.to_s
end

def getmmr_s (questionChild)
  number = questionChild.attributes["number"]
  required = questionChild.attributes["required"]
  type = questionChild.attributes["type"]
  ask = questionChild.elements["ask"].attributes["value"].to_s
  listRows = getListOptions(questionChild.elements["rows"],"option")
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