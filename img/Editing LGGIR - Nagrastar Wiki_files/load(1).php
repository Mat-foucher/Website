var mediaWikiLoadStart=(new Date()).getTime();function isCompatible(ua){if(ua===undefined){ua=navigator.userAgent;}return!((ua.indexOf('MSIE')!==-1&&parseFloat(ua.split('MSIE')[1])<8)||(ua.indexOf('Firefox/')!==-1&&parseFloat(ua.split('Firefox/')[1])<3)||(ua.indexOf('Opera/')!==-1&&(ua.indexOf('Version/')===-1?parseFloat(ua.split('Opera/')[1])<10:parseFloat(ua.split('Version/')[1])<12))||(ua.indexOf('Opera ')!==-1&&parseFloat(ua.split(' Opera ')[1])<10)||ua.match(/BlackBerry[^\/]*\/[1-5]\./)||ua.match(/webOS\/1\.[0-4]/)||ua.match(/PlayStation/i)||ua.match(/SymbianOS|Series60/)||ua.match(/NetFront/)||ua.match(/Opera Mini/)||ua.match(/S40OviBrowser/)||(ua.match(/Glass/)&&ua.match(/Android/)));}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/load.php"});mw.loader.register([["site",1635958321,[],"site"],["noscript",1635958321,[],"noscript"],["filepage",1635958321],["user.groups",1635958321,[],"user"],["user",1635958321,[],"user"],["user.cssprefs",1635958328
,[],"private"],["user.defaults",1635958321],["user.options",1635958328,[6],"private"],["user.tokens",1605637022,[],"private"],["mediawiki.language.data",1635958321,[149]],["mediawiki.skinning.elements",1635958321],["mediawiki.skinning.content",1635958321],["mediawiki.skinning.interface",1635958321],["mediawiki.skinning.content.parsoid",1635958321],["mediawiki.skinning.content.externallinks",1635958321],["jquery.accessKeyLabel",1635958321,[25,43]],["jquery.appear",1635958321],["jquery.arrowSteps",1635958321],["jquery.async",1635958321],["jquery.autoEllipsis",1635958321,[37]],["jquery.badge",1635958321,[146]],["jquery.byteLength",1635958321],["jquery.byteLimit",1635958321,[21]],["jquery.checkboxShiftClick",1635958321],["jquery.chosen",1635958321],["jquery.client",1635958321],["jquery.color",1635958321,[27]],["jquery.colorUtil",1635958321],["jquery.confirmable",1635958321,[150]],["jquery.cookie",1635958321],["jquery.expandableField",1635958321],["jquery.farbtastic",1635958321,[27]],[
"jquery.footHovzer",1635958321],["jquery.form",1635958321],["jquery.fullscreen",1635958321],["jquery.getAttrs",1635958321],["jquery.hidpi",1635958321],["jquery.highlightText",1635958321,[43]],["jquery.hoverIntent",1635958321],["jquery.localize",1635958321],["jquery.makeCollapsible",1635958321],["jquery.mockjax",1635958321],["jquery.mw-jump",1635958321],["jquery.mwExtension",1635958321],["jquery.placeholder",1635958321],["jquery.qunit",1635958321],["jquery.qunit.completenessTest",1635958321,[45]],["jquery.spinner",1635958321],["jquery.jStorage",1635958321,[91]],["jquery.suggestions",1635958321,[37]],["jquery.tabIndex",1635958321],["jquery.tablesorter",1635958321,[43,151]],["jquery.textSelection",1635958321,[25]],["jquery.throttle-debounce",1635958321],["jquery.validate",1635958321],["jquery.xmldom",1635958321],["jquery.tipsy",1635958321],["jquery.ui.core",1635958321,[],"jquery.ui"],["jquery.ui.accordion",1635958321,[57,76],"jquery.ui"],["jquery.ui.autocomplete",1635958321,[65],
"jquery.ui"],["jquery.ui.button",1635958321,[57,76],"jquery.ui"],["jquery.ui.datepicker",1635958321,[57],"jquery.ui"],["jquery.ui.dialog",1635958321,[60,63,67,69],"jquery.ui"],["jquery.ui.draggable",1635958321,[57,66],"jquery.ui"],["jquery.ui.droppable",1635958321,[63],"jquery.ui"],["jquery.ui.menu",1635958321,[57,67,76],"jquery.ui"],["jquery.ui.mouse",1635958321,[76],"jquery.ui"],["jquery.ui.position",1635958321,[],"jquery.ui"],["jquery.ui.progressbar",1635958321,[57,76],"jquery.ui"],["jquery.ui.resizable",1635958321,[57,66],"jquery.ui"],["jquery.ui.selectable",1635958321,[57,66],"jquery.ui"],["jquery.ui.slider",1635958321,[57,66],"jquery.ui"],["jquery.ui.sortable",1635958321,[57,66],"jquery.ui"],["jquery.ui.spinner",1635958321,[60],"jquery.ui"],["jquery.ui.tabs",1635958321,[57,76],"jquery.ui"],["jquery.ui.tooltip",1635958321,[57,67,76],"jquery.ui"],["jquery.ui.widget",1635958321,[],"jquery.ui"],["jquery.effects.core",1635958321,[],"jquery.ui"],["jquery.effects.blind",1635958321,[77],
"jquery.ui"],["jquery.effects.bounce",1635958321,[77],"jquery.ui"],["jquery.effects.clip",1635958321,[77],"jquery.ui"],["jquery.effects.drop",1635958321,[77],"jquery.ui"],["jquery.effects.explode",1635958321,[77],"jquery.ui"],["jquery.effects.fade",1635958321,[77],"jquery.ui"],["jquery.effects.fold",1635958321,[77],"jquery.ui"],["jquery.effects.highlight",1635958321,[77],"jquery.ui"],["jquery.effects.pulsate",1635958321,[77],"jquery.ui"],["jquery.effects.scale",1635958321,[77],"jquery.ui"],["jquery.effects.shake",1635958321,[77],"jquery.ui"],["jquery.effects.slide",1635958321,[77],"jquery.ui"],["jquery.effects.transfer",1635958321,[77],"jquery.ui"],["json",1635958321,[],null,null,"return!!(window.JSON\u0026\u0026JSON.stringify\u0026\u0026JSON.parse);"],["moment",1635958321],["mediawiki.apihelp",1635958321,[112]],["mediawiki.template",1635958321],["mediawiki.template.mustache",1635958321],["mediawiki.apipretty",1635958321],["mediawiki.api",1635958321,[128]],["mediawiki.api.category",
1635958321,[123,97]],["mediawiki.api.edit",1635958321,[123,97,8]],["mediawiki.api.login",1635958321,[97]],["mediawiki.api.options",1635958321,[97]],["mediawiki.api.parse",1635958321,[97]],["mediawiki.api.watch",1635958321,[97,8]],["mediawiki.content.json",1635958321],["mediawiki.confirmCloseWindow",1635958321],["mediawiki.debug",1635958321,[32,56]],["mediawiki.debug.init",1635958321,[106]],["mediawiki.feedback",1635958321,[123,116,204]],["mediawiki.filewarning",1635958321,[204]],["mediawiki.helplink",1635958321],["mediawiki.hidpi",1635958321,[36],null,null,"return'srcset'in new Image();"],["mediawiki.hlist",1635958321,[25]],["mediawiki.htmlform",1635958321,[22,43]],["mediawiki.icon",1635958321],["mediawiki.inspect",1635958321,[21,91]],["mediawiki.messagePoster",1635958321,[97,203]],["mediawiki.messagePoster.wikitext",1635958321,[99,116]],["mediawiki.notification",1635958321,[157]],["mediawiki.notify",1635958321],["mediawiki.pager.tablePager",1635958321],["mediawiki.searchSuggest",
1635958321,[35,44,49,97]],["mediawiki.sectionAnchor",1635958321],["mediawiki.Title",1635958321,[21,128]],["mediawiki.toc",1635958321,[29]],["mediawiki.Uri",1635958321,[128]],["mediawiki.user",1635958321,[29,97,7,8]],["mediawiki.userSuggest",1635958321,[49,97]],["mediawiki.util",1635958321,[15,119]],["mediawiki.cookie",1635958321,[29]],["mediawiki.toolbar",1635958321],["mediawiki.action.edit",1635958321,[22,52,132]],["mediawiki.action.edit.styles",1635958321],["mediawiki.action.edit.collapsibleFooter",1635958321,[29,40,114]],["mediawiki.action.edit.preview",1635958321,[33,47,52,137,97,150]],["mediawiki.action.edit.stash",1635958321,[35,97]],["mediawiki.action.history",1635958321,[],"mediawiki.action.history"],["mediawiki.action.history.diff",1635958321,[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit",1635958321,[157,7]],["mediawiki.action.view.metadata",1635958321],["mediawiki.action.view.categoryPage.styles",1635958321],["mediawiki.action.view.postEdit",1635958321,[
129,150,94]],["mediawiki.action.view.redirect",1635958321,[25]],["mediawiki.action.view.redirectPage",1635958321],["mediawiki.action.view.rightClickEdit",1635958321],["mediawiki.action.edit.editWarning",1635958321,[52,105,150,7]],["mediawiki.language",1635958321,[147,9]],["mediawiki.cldr",1635958321,[148]],["mediawiki.libs.pluralruleparser",1635958321],["mediawiki.language.init",1635958321],["mediawiki.jqueryMsg",1635958321,[146,128]],["mediawiki.language.months",1635958321,[146]],["mediawiki.language.names",1635958321,[149]],["mediawiki.language.specialCharacters",1605637022,[146]],["mediawiki.libs.jpegmeta",1635958321],["mediawiki.page.gallery",1635958321,[53]],["mediawiki.page.ready",1635958321,[15,23,40,42,44]],["mediawiki.page.startup",1635958321,[128]],["mediawiki.page.patrol.ajax",1635958321,[47,123,97,157,8]],["mediawiki.page.watch.ajax",1635958321,[103,157]],["mediawiki.page.image.pagination",1635958321,[47,125]],["mediawiki.special",1635958321],["mediawiki.special.block",
1635958321,[128]],["mediawiki.special.changeemail",1635958321,[128]],["mediawiki.special.changeslist",1635958321],["mediawiki.special.changeslist.legend",1635958321],["mediawiki.special.changeslist.legend.js",1635958321,[29,40]],["mediawiki.special.changeslist.enhanced",1635958321],["mediawiki.special.edittags",1635958321,[24]],["mediawiki.special.edittags.styles",1635958321],["mediawiki.special.import",1635958321],["mediawiki.special.movePage",1635958321,[22]],["mediawiki.special.pageLanguage",1635958321],["mediawiki.special.pagesWithProp",1635958321],["mediawiki.special.preferences",1635958321,[105,146]],["mediawiki.special.recentchanges",1635958321,[161]],["mediawiki.special.search",1635958321],["mediawiki.special.undelete",1635958321],["mediawiki.special.upload",1635958321,[47,123,97,105,150,154,7,94]],["mediawiki.special.userlogin.common.styles",1635958321],["mediawiki.special.userlogin.signup.styles",1635958321],["mediawiki.special.userlogin.login.styles",1635958321],[
"mediawiki.special.userlogin.common.js",1635958321],["mediawiki.special.userlogin.signup.js",1635958321,[53,97,150]],["mediawiki.special.unwatchedPages",1635958321,[123,103]],["mediawiki.special.javaScriptTest",1635958321,[125]],["mediawiki.special.version",1635958321],["mediawiki.legacy.config",1635958321],["mediawiki.legacy.ajax",1635958321,[193]],["mediawiki.legacy.commonPrint",1635958320],["mediawiki.legacy.protect",1635958321,[22]],["mediawiki.legacy.shared",1635958320],["mediawiki.legacy.oldshared",1635958321],["mediawiki.legacy.wikibits",1635958321,[128]],["mediawiki.ui",1635958321],["mediawiki.ui.checkbox",1635958321],["mediawiki.ui.radio",1635958321],["mediawiki.ui.anchor",1635958321],["mediawiki.ui.button",1635958321],["mediawiki.ui.input",1635958321],["mediawiki.ui.icon",1635958321],["mediawiki.ui.text",1635958321],["es5-shim",1635958321,[],null,null,"return(function(){'use strict';return!this\u0026\u0026!!Function.prototype.bind;}());"],["oojs",1635958321,[202,91]],[
"oojs-ui",1635958321,[203,205]],["oojs-ui.styles",1635958321],["pdfhandler.messages",1605637022],["ext.geshi.language.4cs",1635958321],["ext.geshi.language.6502acme",1635958321],["ext.geshi.language.6502kickass",1635958321],["ext.geshi.language.6502tasm",1635958321],["ext.geshi.language.68000devpac",1635958321],["ext.geshi.language.abap",1635958321],["ext.geshi.language.actionscript",1635958321],["ext.geshi.language.actionscript3",1635958321],["ext.geshi.language.ada",1635958321],["ext.geshi.language.aimms",1635958321],["ext.geshi.language.algol68",1635958321],["ext.geshi.language.apache",1635958321],["ext.geshi.language.applescript",1635958321],["ext.geshi.language.arm",1635958321],["ext.geshi.language.asm",1635958321],["ext.geshi.language.asp",1635958321],["ext.geshi.language.asymptote",1635958321],["ext.geshi.language.autoconf",1635958321],["ext.geshi.language.autohotkey",1635958321],["ext.geshi.language.autoit",1635958321],["ext.geshi.language.avisynth",1635958321],[
"ext.geshi.language.awk",1635958321],["ext.geshi.language.bascomavr",1635958321],["ext.geshi.language.bash",1635958321],["ext.geshi.language.basic4gl",1635958321],["ext.geshi.language.bf",1635958321],["ext.geshi.language.bibtex",1635958321],["ext.geshi.language.blitzbasic",1635958321],["ext.geshi.language.bnf",1635958321],["ext.geshi.language.boo",1635958321],["ext.geshi.language.c",1635958321],["ext.geshi.language.caddcl",1635958321],["ext.geshi.language.cadlisp",1635958321],["ext.geshi.language.cfdg",1635958321],["ext.geshi.language.cfm",1635958321],["ext.geshi.language.chaiscript",1635958321],["ext.geshi.language.chapel",1635958321],["ext.geshi.language.cil",1635958321],["ext.geshi.language.clojure",1635958321],["ext.geshi.language.cmake",1635958321],["ext.geshi.language.cobol",1635958321],["ext.geshi.language.coffeescript",1635958321],["ext.geshi.language.cpp",1635958321],["ext.geshi.language.csharp",1635958321],["ext.geshi.language.css",1635958321],["ext.geshi.language.cuesheet",
1635958321],["ext.geshi.language.d",1635958321],["ext.geshi.language.dart",1635958321],["ext.geshi.language.dcl",1635958321],["ext.geshi.language.dcpu16",1635958321],["ext.geshi.language.dcs",1635958321],["ext.geshi.language.delphi",1635958321],["ext.geshi.language.diff",1635958321],["ext.geshi.language.div",1635958321],["ext.geshi.language.dos",1635958321],["ext.geshi.language.dot",1635958321],["ext.geshi.language.e",1635958321],["ext.geshi.language.ecmascript",1635958321],["ext.geshi.language.eiffel",1635958321],["ext.geshi.language.email",1635958321],["ext.geshi.language.epc",1635958321],["ext.geshi.language.erlang",1635958321],["ext.geshi.language.euphoria",1635958321],["ext.geshi.language.ezt",1635958321],["ext.geshi.language.f1",1635958321],["ext.geshi.language.falcon",1635958321],["ext.geshi.language.fo",1635958321],["ext.geshi.language.fortran",1635958321],["ext.geshi.language.freebasic",1635958321],["ext.geshi.language.freeswitch",1635958321],["ext.geshi.language.fsharp",
1635958321],["ext.geshi.language.gambas",1635958321],["ext.geshi.language.gdb",1635958321],["ext.geshi.language.genero",1635958321],["ext.geshi.language.genie",1635958321],["ext.geshi.language.gettext",1635958321],["ext.geshi.language.glsl",1635958321],["ext.geshi.language.gml",1635958321],["ext.geshi.language.gnuplot",1635958321],["ext.geshi.language.go",1635958321],["ext.geshi.language.groovy",1635958321],["ext.geshi.language.gwbasic",1635958321],["ext.geshi.language.haskell",1635958321],["ext.geshi.language.haxe",1635958321],["ext.geshi.language.hicest",1635958321],["ext.geshi.language.hq9plus",1635958321],["ext.geshi.language.html4strict",1635958321],["ext.geshi.language.html5",1635958321],["ext.geshi.language.icon",1635958321],["ext.geshi.language.idl",1635958321],["ext.geshi.language.ini",1635958321],["ext.geshi.language.inno",1635958321],["ext.geshi.language.intercal",1635958321],["ext.geshi.language.io",1635958321],["ext.geshi.language.ispfpanel",1635958321],[
"ext.geshi.language.j",1635958321],["ext.geshi.language.java",1635958321],["ext.geshi.language.java5",1635958321],["ext.geshi.language.javascript",1635958321],["ext.geshi.language.jcl",1635958321],["ext.geshi.language.jquery",1635958321],["ext.geshi.language.kixtart",1635958321],["ext.geshi.language.klonec",1635958321],["ext.geshi.language.klonecpp",1635958321],["ext.geshi.language.latex",1635958321],["ext.geshi.language.lb",1635958321],["ext.geshi.language.ldif",1635958321],["ext.geshi.language.lisp",1635958321],["ext.geshi.language.llvm",1635958321],["ext.geshi.language.locobasic",1635958321],["ext.geshi.language.logtalk",1635958321],["ext.geshi.language.lolcode",1635958321],["ext.geshi.language.lotusformulas",1635958321],["ext.geshi.language.lotusscript",1635958321],["ext.geshi.language.lscript",1635958321],["ext.geshi.language.lsl2",1635958321],["ext.geshi.language.lua",1635958321],["ext.geshi.language.m68k",1635958321],["ext.geshi.language.magiksf",1635958321],[
"ext.geshi.language.make",1635958321],["ext.geshi.language.mapbasic",1635958321],["ext.geshi.language.matlab",1635958321],["ext.geshi.language.mirc",1635958321],["ext.geshi.language.mmix",1635958321],["ext.geshi.language.modula2",1635958321],["ext.geshi.language.modula3",1635958321],["ext.geshi.language.mpasm",1635958321],["ext.geshi.language.mxml",1635958321],["ext.geshi.language.mysql",1635958321],["ext.geshi.language.nagios",1635958321],["ext.geshi.language.netrexx",1635958321],["ext.geshi.language.newlisp",1635958321],["ext.geshi.language.nginx",1635958321],["ext.geshi.language.nimrod",1635958321],["ext.geshi.language.nsis",1635958321],["ext.geshi.language.oberon2",1635958321],["ext.geshi.language.objc",1635958321],["ext.geshi.language.objeck",1635958321],["ext.geshi.language.ocaml",1635958321],["ext.geshi.language.octave",1635958321],["ext.geshi.language.oobas",1635958321],["ext.geshi.language.oorexx",1635958321],["ext.geshi.language.oracle11",1635958321],[
"ext.geshi.language.oracle8",1635958321],["ext.geshi.language.oxygene",1635958321],["ext.geshi.language.oz",1635958321],["ext.geshi.language.parasail",1635958321],["ext.geshi.language.parigp",1635958321],["ext.geshi.language.pascal",1635958321],["ext.geshi.language.pcre",1635958321],["ext.geshi.language.per",1635958321],["ext.geshi.language.perl",1635958321],["ext.geshi.language.perl6",1635958321],["ext.geshi.language.pf",1635958321],["ext.geshi.language.php",1635958321],["ext.geshi.language.pic16",1635958321],["ext.geshi.language.pike",1635958321],["ext.geshi.language.pixelbender",1635958321],["ext.geshi.language.pli",1635958321],["ext.geshi.language.plsql",1635958321],["ext.geshi.language.postgresql",1635958321],["ext.geshi.language.postscript",1635958321],["ext.geshi.language.povray",1635958321],["ext.geshi.language.powerbuilder",1635958321],["ext.geshi.language.powershell",1635958321],["ext.geshi.language.proftpd",1635958321],["ext.geshi.language.progress",1635958321],[
"ext.geshi.language.prolog",1635958321],["ext.geshi.language.properties",1635958321],["ext.geshi.language.providex",1635958321],["ext.geshi.language.purebasic",1635958321],["ext.geshi.language.pycon",1635958321],["ext.geshi.language.pys60",1635958321],["ext.geshi.language.python",1635958321],["ext.geshi.language.q",1635958321],["ext.geshi.language.qbasic",1635958321],["ext.geshi.language.qml",1635958321],["ext.geshi.language.racket",1635958321],["ext.geshi.language.rails",1635958321],["ext.geshi.language.rbs",1635958321],["ext.geshi.language.rebol",1635958321],["ext.geshi.language.reg",1635958321],["ext.geshi.language.rexx",1635958321],["ext.geshi.language.robots",1635958321],["ext.geshi.language.rpmspec",1635958321],["ext.geshi.language.rsplus",1635958321],["ext.geshi.language.ruby",1635958321],["ext.geshi.language.rust",1635958321],["ext.geshi.language.sas",1635958321],["ext.geshi.language.scala",1635958321],["ext.geshi.language.scheme",1635958321],["ext.geshi.language.scilab",
1635958321],["ext.geshi.language.scl",1635958321],["ext.geshi.language.sdlbasic",1635958321],["ext.geshi.language.smalltalk",1635958321],["ext.geshi.language.smarty",1635958321],["ext.geshi.language.spark",1635958321],["ext.geshi.language.sparql",1635958321],["ext.geshi.language.sql",1635958321],["ext.geshi.language.standardml",1635958321],["ext.geshi.language.stonescript",1635958321],["ext.geshi.language.systemverilog",1635958321],["ext.geshi.language.tcl",1635958321],["ext.geshi.language.teraterm",1635958321],["ext.geshi.language.text",1635958321],["ext.geshi.language.thinbasic",1635958321],["ext.geshi.language.tsql",1635958321],["ext.geshi.language.typoscript",1635958321],["ext.geshi.language.unicon",1635958321],["ext.geshi.language.upc",1635958321],["ext.geshi.language.urbi",1635958321],["ext.geshi.language.uscript",1635958321],["ext.geshi.language.vala",1635958321],["ext.geshi.language.vb",1635958321],["ext.geshi.language.vbnet",1635958321],["ext.geshi.language.vbscript",
1635958321],["ext.geshi.language.vedit",1635958321],["ext.geshi.language.verilog",1635958321],["ext.geshi.language.vhdl",1635958321],["ext.geshi.language.vim",1635958321],["ext.geshi.language.visualfoxpro",1635958321],["ext.geshi.language.visualprolog",1635958321],["ext.geshi.language.whitespace",1635958321],["ext.geshi.language.whois",1635958321],["ext.geshi.language.winbatch",1635958321],["ext.geshi.language.xbasic",1635958321],["ext.geshi.language.xml",1635958321],["ext.geshi.language.xpp",1635958321],["ext.geshi.language.yaml",1635958321],["ext.geshi.language.z80",1635958321],["ext.geshi.language.zxbasic",1635958321],["skins.cologneblue",1635958321],["skins.modern",1635958321],["skins.monobook.styles",1635958321],["skins.vector.styles",1635958321],["skins.vector.styles.responsive",1635958321],["skins.vector.js",1635958321,[50,53]],["skins.apex",1635958321],["skins.bouquet",1635958321],["skins.bouquet.js",1635958321],["themeloader.skins.bouquet.forgetmenot",1635958321],[
"themeloader.skins.bouquet.pinkdogwood",1635958321],["themeloader.skins.bouquet.tigerlily",1635958321],["skins.deskmessmirrored",1635958321],["skins.greystuff",1635958321],["skins.greystuff.js",1635958321],["skins.bluesky",1635958321],["zzzskins.bluesky.mainpage",1635958321],["skins.bluesky.hacks.general",1635958321],["skins.bluesky.hacks.action.delete",1635958321],["skins.bluesky.hacks.action.edit",1635958321],["skins.bluesky.hacks.action.history",1635958321],["skins.bluesky.hacks.action.protect",1635958321],["skins.bluesky.hacks.filepage",1635958321],["skins.bluesky.hacks.special.log",1635958321],["skins.bluesky.hacks.special.movepage",1635958321],["skins.bluesky.hacks.special.recentchanges",1635958321],["skins.bluesky.hacks.special.undelete",1635958321],["skins.bluesky.hacks.special.watchlist",1635958321],["themeloader.skins.bluesky.blue",1635958321],["themeloader.skins.bluesky.green",1635958321],["themeloader.skins.bluesky.grey",1635958321],["themeloader.skins.bluesky.red",
1635958321],["themeloader.skins.bluesky.white",1635958321],["skins.bluesky.js.easing",1635958321],["skins.bluesky.js",1635958321,[25,62,471]],["skins.dusk",1635958321],["skins.dusk.green",1635958321],["skins.dusktodawn",1635958321],["skins.erudite",1635958321],["skins.gamepress",1635958321],["themeloader.skins.gamepress.blue",1635958321],["themeloader.skins.gamepress.green",1635958321],["themeloader.skins.gamepress.orange",1635958321],["skins.mask",1635958321],["skins.metrolook.styles",1635958321],["skins.metrolook.styles.responsive",1635958321],["skins.metrolook.js",1635958321,[50,53,121]],["skins.metrolook.collapsibleNav",1635958321,[25,29,50,53]],["skins.nimbus",1635958321],["ext.nostalgia",1635958321],["skins.splash",1635958321],["skins.truglass",1635958321],["ext.math.styles",1635958321],["ext.math.desktop.styles",1635958321],["ext.math.scripts",1635958321],["ext.math.editbutton.enabler",1635958321],["ext.math.visualEditor",1635958321,["ext.visualEditor.mwcore"]],[
"ext.cite.styles",1635958321],["ext.cite.a11y",1635958321],["ext.cite.style",1635958321],["ext.geshi.local",1635958321]]);mw.config.set({"wgLoadScript":"/load.php","debug":false,"skin":"vector","stylepath":"/skins","wgUrlProtocols":"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/index.php?title=$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgSearchType":"CirrusSearch","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"https://wiki.windows.nagrastar.com","wgServerName":"wiki.windows.nagrastar.com","wgUserLanguage":"en","wgContentLanguage":"en","wgTranslateNumerals":true,"wgVersion":"1.25.6","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":
"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Nagrastar Wiki","5":"Nagrastar Wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"nagrastar_wiki":4,"nagrastar_wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgContentNamespaces":[0],"wgSiteName":"Nagrastar Wiki","wgDBname":"wikidb","wgAvailableSkins":{"cologneblue":"CologneBlue","modern":"Modern","monobook":"MonoBook","vector":"Vector","apex":"Apex","bouquet":"Bouquet","deskmessmirrored":"DeskMessMirrored","greystuff":"GreyStuff","bluesky":"BlueSky","dusk":"Dusk","dusktodawn":"DuskToDawn","erudite":
"Erudite","gamepress":"Gamepress","mask":"Mask","metrolook":"Metrolook","nimbus":"Nimbus","nostalgia":"Nostalgia","splash":"Splash","truglass":"Truglass","fallback":"Fallback","apioutput":"ApiOutput"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"wikidb_wikidb_","wgCookieDomain":"","wgCookiePath":"/","wgCookieExpiration":15552000,"wgResourceLoaderMaxQueryLength":2000,"wgCaseSensitiveNamespaces":[0,-2,1,4,5,6,7,10,11,12,13,14,15],"wgLegalTitleChars":" %!\"$\u0026'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":false,"wgMetrolook":{"mobile":true}});};if(isCompatible()){document.write("\u003Cscript src=\"/load.php?debug=false\u0026amp;lang=en\u0026amp;modules=jquery%2Cmediawiki\u0026amp;only=scripts\u0026amp;skin=vector\u0026amp;version=20211103T165201Z\"\u003E\u003C/script\u003E");};
/* cache key: wikidb-wikidb_:resourceloader:filter:minify-js:7:26361ab07f4e1bce1d188b782c134dd5 */