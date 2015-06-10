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
    val = 0
    # Se realiza la lectura de cada una las preguntas
    pollChild.each_element("question") do | questionChild |
      ask = questionChild.elements["ask"].attributes["value"].to_s
      listOptions = getListOptions(questionChild)
      print listOptions
      print "\n\n" 
    end    
  end
end

# Método encargado de obtener de un determinado elemento el listado de opciones
def getListOptions ( element )
  listOptions = []
  element.each_element("option") do |option|
    has = Hash.new
    option.attributes.each_attribute do |attri|
      has[attri.expanded_name] = attri.value
    end
    listOptions.push(has)
  end
  return listOptions
end

if ARGV[0]
  readPollFileXml ( ARGV[0] )
end