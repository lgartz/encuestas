require 'gtk2'
require 'erb'
require 'rexml/document'
require 'fileutils'

class GeneratorGUI < Gtk::Window
  def initialize
    super
    inicializar_ventana
  end

  def inicializar_ventana
    set_title "Php - Generator Polls"
    set_default_size 400, 270
    set_window_position Gtk::Window::Position::CENTER
    signal_connect "delete_event" do
      Gtk.main_quit
    end
    signal_connect "destroy" do
      Gtk.main_quit
    end
    init_gui
    show_all
  end

  def init_gui
    pathFile = ""
    pathCreate = ""
    fixed = Gtk::Fixed.new
    add fixed
    label = Gtk::Label.new("Xml - File Path:")
    label.set_size_request 100,30
    button = Gtk::FileChooserButton.new("Search", Gtk::FileChooser::ACTION_OPEN)
    button.set_size_request 280,30
    filter = Gtk::FileFilter.new
    filter.add_pattern('*.xml')
    button.add_filter(filter)
    button.signal_connect('selection_changed') do |w|
      pathFile = w.filename.to_s
      arrayPath = pathFile.split('\\')
      pathCreate = ""
      for i in 0..arrayPath.length-2
        pathCreate+=arrayPath[i]+"\\"
      end
      pathCreate+="files\\"
    end
    labelDB = Gtk::Label.new("Name Database:")
    entryDB = Gtk::Entry.new
    entryDB.set_width_chars 45
    labelDBServer = Gtk::Label.new("Server Database:")
    entryDBServer = Gtk::Entry.new
    entryDBServer.set_width_chars 45
    labelDBUser = Gtk::Label.new("User Database:")
    entryDBUser = Gtk::Entry.new
    entryDBUser.set_width_chars 45
    labelDBPass = Gtk::Label.new("Pass Database:")
    entryDBPass = Gtk::Entry.new
    entryDBPass.set_width_chars 45
    entryDBPass.visibility = false
    entryDBPass.invisible_char = 42 
    btGenerate = Gtk::Button.new "Generate"
    btGenerate.signal_connect "clicked" do
      if pathFile == "" or pathCreate == ""
        showMessage("Debe seleccionar el archivo de origen",Gtk::MessageDialog::ERROR,self)
      elsif entryDB.text.strip == ""
        showMessage("Debe Ingresar el nombre de la base de datos",Gtk::MessageDialog::ERROR,self)
      elsif entryDBServer.text.strip == ""
        showMessage("Debe Ingresar el servidor de la base de datos",Gtk::MessageDialog::ERROR,self)
      elsif entryDBUser.text.strip == ""
        showMessage("Debe Ingresar el nombre de usuario de la base de datos",Gtk::MessageDialog::ERROR,self)
      else
        readPollFileXml(pathFile,pathCreate,entryDB.text.strip, entryDBServer.text.strip,entryDBUser.text.strip,entryDBPass.text.strip)
        showMessage("Se ha creado el formulario Satisfactoriamente en la ruta: "+pathCreate,Gtk::MessageDialog::INFO,self)
        Gtk.main_quit
      end
    end
    btCancel = Gtk::Button.new "Cancel"
    btCancel.signal_connect "clicked" do
      Gtk.main_quit
    end
    fixed.put label,10,10
    fixed.put labelDB,15,58
    fixed.put labelDBServer,15,103
    fixed.put labelDBUser,24,148
    fixed.put labelDBPass,24,193
    fixed.put button,105,10
    fixed.put entryDB,105,55
    fixed.put entryDBServer,105,100
    fixed.put entryDBUser,105,145
    fixed.put entryDBPass,105,190
    fixed.put btGenerate,145,235
    fixed.put btCancel,205,235
  end

  def showMessage (message, type, this)
    mensaje = Gtk::MessageDialog.new(this,
    Gtk::MessageDialog::DESTROY_WITH_PARENT,
    type, Gtk::MessageDialog::BUTTONS_OK,
    message)
    mensaje.run
    mensaje.destroy
  end

  def readPollFileXml ( pathFile, pathCreate, dbName, dbServer, dbUser, dbPass )
    # Se realiza la lectura del documento XML base para realizar las encuestas
    xml = REXML::Document.new(File.open(pathFile))
    # Se realiza la lectura de cada una las encuestas
    sql = ""
    idPoll = 1
    xml.root.each_element("poll") do | pollChild |
      title = pollChild.attributes["title"].to_s
      name = pollChild.attributes["name"].to_s
      namePage = pollChild.attributes["namePage"].to_s
      detail = pollChild.attributes["detail"].to_s
      namePhp = namePage+"_process"
      body = ""
      listDatesId = []
      listQuestionId = []
      hashValidate = Hash.new
      hashNames = Hash.new
      # Se realiza la lectura de cada una las preguntas
      pollChild.each_element("question") do | questionChild |
        type = questionChild.attributes["type"]
        if type == "title"
          val  = questionChild.attributes["value"]
          body << "<br><h1>#{val}</h1>\n"
        else
          number = questionChild.attributes["number"]
          listQuestionId.push("#{type}_#{number}")
          required = questionChild.attributes["required"]
          ask = questionChild.elements["ask"].attributes["value"]
          resultado = getResultElementForm(questionChild,type,number,ask,listDatesId,hashNames)
          body << "#{resultado}\n"
          resultSQL = getResultSQL(ask,type,number,questionChild)
          sql << "#{resultSQL}\n"
          if required == "true"
            getResultHashElementsRequired(type,number,hashValidate,questionChild)
          end
        end
      end
      erbSQLPoll = getTemplate("../encuestas/templates/sql_poll.template",binding)
      sql << erbSQLPoll.to_s
      erbJavaScript = getTemplate("../encuestas/templates/poll_script.template",binding)
      createFile(pathCreate+"javascript\\",".js",namePage,erbJavaScript)
      erbHtml = getTemplate("../encuestas/templates/poll.template",binding)
      createFile(pathCreate,".php",namePage,erbHtml)
      erbPhp = getTemplate("../encuestas/templates/process.template",binding)
      createFile(pathCreate,".php",namePhp,erbPhp)
      idPoll += 1
    end
    erbSQL = getTemplate("../encuestas/templates/sql.template",binding)
    createFile(pathCreate+"sql\\",".sql","encuestas",erbSQL)
    erbBase = getTemplate("../encuestas/templates/base.template",binding)
    createFile(pathCreate,".php","encuestas",erbBase)
    erbMail = getTemplate("../encuestas/templates/mail.template",binding)
    createFile(pathCreate,".php","mail",erbMail)
    erbPerData = getTemplate("../encuestas/templates/perdata.template",binding)
    createFile(pathCreate,".php","perdata",erbPerData)
    erbResult = getTemplate("../encuestas/templates/result.template",binding)
    createFile(pathCreate,".php","result",erbResult)
    copyFiles(pathCreate)
  end

  #Método encargado de copiar los archivos necesarios para incluir en las paginas generadas
  def copyFiles(pathCreate)
    FileUtils.mkdir_p(pathCreate+"css\\")
    FileUtils.cp(Dir["../encuestas/css/**"],pathCreate+"css")
    FileUtils.mkdir_p(pathCreate+"img\\")
    FileUtils.cp(Dir["../encuestas/img/**"],pathCreate+"img")
    FileUtils.mkdir_p(pathCreate+"fonts\\")
    FileUtils.cp(Dir["../encuestas/fonts/**"],pathCreate+"fonts")
    FileUtils.mkdir_p(pathCreate+"font-awesome\\css\\")
    FileUtils.cp(Dir["../encuestas/font-awesome/css/**"],pathCreate+"font-awesome\\css")
    FileUtils.mkdir_p(pathCreate+"font-awesome\\fonts\\")
    FileUtils.cp(Dir["../encuestas/font-awesome/fonts/**"],pathCreate+"font-awesome\\fonts")
    FileUtils.mkdir_p(pathCreate+"font-awesome\\less\\")
    FileUtils.cp(Dir["../encuestas/font-awesome/less/**"],pathCreate+"font-awesome\\less")
    FileUtils.mkdir_p(pathCreate+"font-awesome\\scss\\")
    FileUtils.cp(Dir["../encuestas/font-awesome/scss/**"],pathCreate+"font-awesome\\scss")
    FileUtils.cp("../encuestas/conexion.php",pathCreate)
    FileUtils.cp("../encuestas/fail.php",pathCreate)
    FileUtils.cp("../encuestas/index.php",pathCreate)
    FileUtils.cp("../encuestas/session_off.php",pathCreate)
    FileUtils.cp("../encuestas/sucess.php",pathCreate)
    FileUtils.cp(Dir["../encuestas/javascript/**"],pathCreate+"javascript\\")
  end

  # Metodo encargado de retornar el codigo sql para cada una de las preguntas generadas
  def getResultSQL(ask,type,number,questionChild)
    resultado = case type
    when "smu_rb"
      then getSqlSm(ask,type,number,questionChild)
    when "smu_s"
      then getSqlSm(ask,type,number,questionChild)
    when "smr_cb"
      then getSqlSm(ask,type,number,questionChild)
    when "smr_sm"
      then getSqlSm(ask,type,number,questionChild)
    when "mmr_rb"
      then getSqlMmr(ask,type,number,questionChild)
    when "mmr_cb"
      then getSqlMmr(ask,type,number,questionChild)
    when "mmr_s"
      then getSqlMmrs(ask,type,number,questionChild)
    when "eru_rb"
      then getSqlAsk(ask,type,number)
    when "psu_t"
      then getSqlAsk(ask,type,number)
    when "psm_t"
      then getSqlAsk(ask,type,number)
    when "psc_ta"
      then getSqlAsk(ask,type,number)
    when "pfh_s"
      then getSqlAsk(ask,type,number)
    when "psf_s"
      then getSqlAsk(ask,type,number)
    when "psh_s"
      then getSqlAsk(ask,type,number)
    end
    return resultado
  end

  def getSqlSm (ask,type,number,questionChild)
    name="#{type}_#{number}"
    listOptions = getListOptions(questionChild,"option")
    erbTemplate = getTemplate("../encuestas/templates/sql_sm.template",binding)
    return erbTemplate.to_s
  end

  def getSqlAsk (ask,type,number)
    name="#{type}_#{number}"
    erbTemplate = getTemplate("../encuestas/templates/sql_ask.template",binding)
    return erbTemplate.to_s
  end

  def getSqlMmr(ask,type,number,questionChild)
    name="#{type}_#{number}"
    listRows = getListOptions(questionChild.elements["rows"],"option")
    listColumns = getListOptions(questionChild.elements["columns"],"option")
    erbTemplate = getTemplate("../encuestas/templates/sql_mmr.template",binding)
    return erbTemplate.to_s
  end

  def getSqlMmrs (ask,type,number,questionChild)
    name="#{type}_#{number}"
    listRows = getListOptions(questionChild.elements["rows"],"option")
    hashColumnas = getListOptionSelect(questionChild)
    erbTemplate = getTemplate("../encuestas/templates/sql_mmrs.template",binding)
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
    when "psf_s"
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
  def getResultElementForm(questionChild,type,number,ask,listDatesId,hashNames)
    resultado = case type
    when "smu_rb"
      then getsmu_rb(questionChild,type,number,ask,hashNames)
    when "smu_s"
      then getsmu_s(questionChild,type,number,ask,hashNames)
    when "smr_cb"
      then getsmr_cb(questionChild,type,number,ask,hashNames)
    when "smr_sm"
      then getsmr_sm(questionChild,type,number,ask,hashNames)
    when "mmr_rb"
      then getmmr_rb(questionChild,type,number,ask,getListOptions(questionChild.elements["rows"],"option"),getListOptions(questionChild.elements["columns"],"option"),hashNames)
    when "mmr_cb"
      then getmmr_cb(questionChild,type,number,ask,getListOptions(questionChild.elements["rows"],"option"),getListOptions(questionChild.elements["columns"],"option"),hashNames)
    when "mmr_s"
      then getmmr_s(questionChild,type,number,ask,getListOptions(questionChild.elements["rows"],"option"),hashNames)
    when "eru_rb"
      then geteru_rb(questionChild,type,number,ask,hashNames)
    when "psu_t"
      then getpsu_t(questionChild,type,number,ask,hashNames)
    when "psm_t"
      then getpsm_t(questionChild,type,number,ask,hashNames)
    when "psc_ta"
      then getpsc_ta(questionChild,type,number,ask,hashNames)
    when "pfh_s"
      then getpfh_s(questionChild,listDatesId,type,number,ask,hashNames)
    when "psf_s"
      then getpsf_s(questionChild,listDatesId,type,number,ask,hashNames)
    when "psh_s"
      then getpsh_s(questionChild,type,number,ask,hashNames)
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
  def getsmu_rb(questionChild,type,number,ask,hashNames)
    name="#{type}_#{number}"
    getContainsKey(hashNames,type,name)
    listOptions = getListOptions(questionChild,"option")
    erbTemplate = getTemplate("../encuestas/templates/smu_rb.template",binding)
    return erbTemplate.to_s
  end

  # Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta smu_s.template
  def getsmu_s(questionChild,type,number,ask,hashNames)
    name="#{type}_#{number}"
    getContainsKey(hashNames,type,name)
    listOptions = getListOptions(questionChild,"option")
    erbTemplate = getTemplate("../encuestas/templates/smu_s.template",binding)
    return erbTemplate.to_s
  end

  # Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta smr_cb.template
  def getsmr_cb (questionChild,type,number,ask,hashNames)
    name="#{type}_#{number}"
    getContainsKey(hashNames,type,name)
    listOptions = getListOptions(questionChild,"option")
    erbTemplate = getTemplate("../encuestas/templates/smr_cb.template",binding)
    return erbTemplate.to_s
  end

  # Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta smr_sm.template
  def getsmr_sm (questionChild,type,number,ask,hashNames)
    name="#{type}_#{number}"
    getContainsKey(hashNames,type,name)
    listOptions = getListOptions(questionChild,"option")
    erbTemplate = getTemplate("../encuestas/templates/smr_sm.template",binding)
    return erbTemplate.to_s
  end

  # Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta psm_t.template
  def getpsm_t (questionChild,type,number,ask,hashNames)
    listOptions = getListOptions(questionChild,"option")
    for i in 1..listOptions.first["value"].to_i
      name="#{type}_#{number}_#{i}"
      getContainsKey(hashNames,type,name)
    end
    erbTemplate = getTemplate("../encuestas/templates/psm_t.template",binding)
    return erbTemplate.to_s
  end

  # Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta mmr_rb.template
  def getmmr_rb (questionChild,type,number,ask,listRows,listColumns,hashNames)
    for i in 1..listRows.length
      name="#{type}_#{number}_#{i}"
      getContainsKey(hashNames,type,name)
    end
    erbTemplate = getTemplate("../encuestas/templates/mmr_rb.template",binding)
    return erbTemplate.to_s
  end

  # Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta mmr_cb.template
  def getmmr_cb (questionChild,type,number,ask,listRows,listColumns,hashNames)
    for i in 1..listRows.length
      name="#{type}_#{number}_#{i}"
      getContainsKey(hashNames,type,name)
    end
    erbTemplate = getTemplate("../encuestas/templates/mmr_cb.template",binding)
    return erbTemplate.to_s
  end

  # Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta eru_rb.template
  def geteru_rb (questionChild,type,number,ask,hashNames)
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
  def getpsu_t (questionChild,type,number,ask,hashNames)
    name="#{type}_#{number}"
    getContainsKey(hashNames,type,name)
    erbTemplate = getTemplate("../encuestas/templates/psu_t.template",binding)
    return erbTemplate.to_s
  end

  # Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta psc_ta.template
  def getpsc_ta (questionChild,type,number,ask,hashNames)
    name="#{type}_#{number}"
    getContainsKey(hashNames,type,name)
    erbTemplate = getTemplate("../encuestas/templates/psc_ta.template",binding)
    return erbTemplate.to_s
  end

  # Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta pfh_s.template
  def getpfh_s (questionChild, listDatesId,type,number,ask,hashNames)
    getContainsKey(hashNames,type,"#{type}_#{number}")
    listDatesId.push("#{type}_date_#{number}")
    erbTemplate = getTemplate("../encuestas/templates/pfh_s.template",binding)
    return erbTemplate.to_s
  end

  def getpsf_s (questionChild, listDatesId,type,number,ask,hashNames)
    getContainsKey(hashNames,type,"#{type}_#{number}")
    listDatesId.push("#{type}_date_#{number}")
    erbTemplate = getTemplate("../encuestas/templates/psf_s.template",binding)
    return erbTemplate.to_s
  end

  # Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta psh_s.template
  def getpsh_s (questionChild,type,number,ask,hashNames)
    getContainsKey(hashNames,type,"#{type}_#{number}")
    erbTemplate = getTemplate("../encuestas/templates/psh_s.template",binding)
    return erbTemplate.to_s
  end

  # Metodo encargado de obtener el resultado del codigo autogenerado a partir de la plantilla de la pregunta mmr_s.template
  def getmmr_s (questionChild,type,number,ask,listRows,hashNames)
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
    FileUtils.mkdir_p(pathFile)
    fileName = pathFile+nameFile+extension
    newFile = File.open(fileName,"w")
    newFile.print erb
    newFile.close
  end
end

Gtk.init
window = GeneratorGUI.new
Gtk.main