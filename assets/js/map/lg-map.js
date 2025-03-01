var current = null;
var r;
var shapeAr = [];
$(function() {
	
	var t = '';
	var mouseX = 0;
	var mouseY = 0;
	
	var isPin = false;
	var mapWrapper = $('.lg-map-wrapper');
	var textArea = $('.lg-map-wrapper .lg-map-text');
	var map = $('.lg-map-wrapper #lg-map');
	var containerWidth = mapWrapper.parent().width();
	var useTextAtBottom;
	var win = $(window);
	var winWidth = win.width();
  
  window.mobileAndTabletcheck = function() {
    var check = false;
    (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
    return check;
  }
  var isMobile = window.mobileAndTabletcheck();
  var isTouchDevice = 'ontouchstart' in window || navigator.MaxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
  $.getScript( mapWrapper.data('map'), function() {

    /////////////////////////////
    //Config
    /////////////////////////////
    var mapWidth = config.mapWidth;
    var mapHeight = config.mapHeight;
    var ratio = mapWidth / mapHeight;
    var oMapWidth = mapWidth;

    /////////////////////////////
    //Mouse position
    /////////////////////////////
    if(config.displayMousePosition){
      $('<div class="mouse-position"><div class="xPos">X: 0</div><div class="yPos">Y: 0</div></div>' ).appendTo(mapWrapper);
      $('body').css('cursor', 'crosshair');
    }

    /////////////////////////////
    //Text area
    /////////////////////////////
    //Set initial default text
    if(config.useText){
      textArea.html(config.defaultText);
    }
    else{
      textArea.hide();
    }

    /////////////////////////////
    //Main map function
    /////////////////////////////
    function createMap() {

       shapeAr = [];

      //start map
      r = new ScaleRaphael('lg-map', config.mapWidth, config.mapHeight),
        attributes = {
         // fill: '#00b8e2',
          cursor: 'crosshair',
          stroke: config.strokeColor,
          'stroke-width': 1,
          'stroke-linejoin': 'round',
          'font-family': 'DIN-Bold',
          'font-size': '19px',
          'font-weight': 'normal'
        },
      arr = new Array();
      var regions = {};
      var boxattrs = {};
      var i = 0;
      for (var state in paths) {
        var shortName = paths[state].name.split('-').join('').toLowerCase();
        regions[shortName] = r.set();

        //Create obj
        var obj = regions[shortName];
        obj.attr(attributes);
        if (!paths[i].enable) {
          boxattrs = {
            'fill': config.offColor,
            stroke: config.offStrokeColor,
			 
          };
        }else {
          boxattrs = {
            'fill': paths[i].color,
            stroke: config.strokeColor,
            
          };
        }
        obj.push(r.path(paths[state].path).attr(boxattrs));
        //Only display text on enabled states unless set in config 
		var abbreviationColor	=	config.abbreviationColor;
		if(paths[state].abbreviation == 'DD' || paths[state].abbreviation == 'GA' || paths[state].abbreviation == 'LD' || paths[state].abbreviation == 'PY' || paths[state].abbreviation == 'AN' || paths[state].abbreviation == 'SK' || paths[state].abbreviation == 'TR'){
			abbreviationColor	=	'#5d5d5d';
		}
        if(paths[i].enable && config.displayAbbreviations || !paths[i].enable && config.displayAbbreviationOnDisabledStates){
		  var t = r.text(paths[state].textX, paths[state].textY, paths[state].abbreviation);
		  if(i==0)	// need to impliment only once
		  {
			$(document).on('click',t,function(event){
				var target_txt	=	event.target;
				var state_abb	=	$(target_txt).text();
				animateStateFormText(state_abb,target_txt);
				
			});			
		  }
		  
          obj.push(t.attr({
            "font-family": "DIN-Bold, Arial, sans-serif",
            "font-weight": "bold",
            "font-size": config.abbreviationFontSize,
            "fill": abbreviationColor,
            'z-index': 1000
          }));
        }
        

        if (!paths[i].enable) {
          obj.toFront();
        }
		

        obj[0].node.id = i;
        if(obj[1]){
          obj[1].toFront();
        }
		
        shapeAr.push(obj[0]);
        var hitArea = r.path(paths[state].path).attr({
          fill: "#f00",
          "stroke-width": 0,
          "opacity": 0,
          'cursor': paths[i].enable ? (config.displayMousePosition ? 'crosshair' : 'pointer') : 'default'
        });
        hitArea.node.id = i;
		$(hitArea.node).attr('state-name','state-'+paths[i].abbreviation);
		$(hitArea.node).attr('text-x',paths[i].textX);
		$(hitArea.node).attr('text-y',paths[i].textY);
        //hitArea.node.id = 'map_'+paths[i].abbreviation;		
		if(!isMobile)
		{
			hitArea.mouseover(function(e){
			  e.stopPropagation();		  
			  var id = $(this.node).attr('id');
			  if (paths[id].enable) {
				//Animate if not already the current state
				
				if (shapeAr[id] != current) {
				  shapeAr[id].animate({
					fill: paths[id].hoverColor
				  }, 500);
				}
				//tooltip
				//showTooltip(paths[id].name);

			  }
			
			});
		}
		
		if(!isMobile) /* only works for the desktop */
		{
			hitArea.mouseout(function(e) {
			
			  var id = $(this.node).attr('id');
			  if (paths[id].enable) {
				//Animate if not already the current state
				if (shapeAr[id] != current) {
				  shapeAr[id].animate({
					fill: paths[id].color
				  }, 500);
				}
				//removeTooltip();
			  }
			
			});
		}
		
		if(!isMobile) /* only works for the desktop */
		{
			hitArea.mouseover(function(e) {
			  var id = $(this.node).attr('id');
			  if (paths[id].enable) {
				//Reset scrollbar
				var t = textArea[0];
				/*t.scrollLeft = 0;
				t.scrollTop = 0;
				*/
				/*shapeAr.forEach(function(thisArg){
					thisArg.animate({
						fill:paths[id].color
					});
				});*/
				//Animate previous state out
				if (current){
				  var curid = $(current.node).attr('id');
				  current.animate({
					fill: isPin ? pins[curid].color : paths[curid].color
				  }, 500);
				}
				isPin = false;

				//Animate next
				shapeAr[id].animate({
				  fill: paths[id].selectedColor
				}, 500);
				
				showTooltip(paths[id].abbreviation);
				current = shapeAr[id];
				/*
				if (config.useText) {
				  textArea.html(paths[id].text);
				} else {
				  window.open(paths[id].url, config.hrefTarget);
				}
				*/
			  }
			});
		}
		
        i++;
      }

      if(!config.displayMousePosition){
        resizeMap();
        if (config.responsive) {
          $(window).resize(function() {
            resizeMap();
          });
        }
      }
    }

    /////////////////////////////
    //Main pins function
    /////////////////////////////
    function createPins() {

      for(var i = 0; i < pins.length; i++){

        var pinattrs = {
          'cursor': 'pointer',
          'fill': pins[i].color,
          'stroke': config.strokeColor,
          'id': i
        };

        var pin = r.circle(pins[i].xPos, pins[i].yPos, config.pinSize).attr(pinattrs);
        pin.node.id = i;

        pin.mouseover(function(e) {
          e.stopPropagation();
          var id = $(this.node).attr('id');
          //Animate if not already the current state
          if (this != current) {
            this.animate({
              fill: pins[id].hoverColor
            }, 500);
          }
          //tooltip
          showTooltip(pins[id].name);

        });

        pin.mouseout(function(e) {

          var id = $(this.node).attr('id');

          //Animate if not already the current state
          if (this != current) {
            this.animate({
              fill: pins[id].color
            }, 500);
          }

          removeTooltip();
          
        });

        pin.mouseup(function(e) {

          var id = $(this.node).attr('id');

          //Reset scrollbar
          var t = textArea[0];
          t.scrollLeft = 0;
          t.scrollTop = 0;

          //Animate previous state out
          if (current) {
            var curid = $(current.node).attr('id');
            current.animate({
              fill: isPin ? pins[curid].color : paths[curid].color
            }, 500);
          }
          isPin = true;

          //Animate next
          this.animate({
            fill: pins[id].selectedColor
          }, 500);

          current = this;

          if (config.useText == true) {
            textArea.html(pins[id].text);
          } else {
            window.open(pins[id].url, config.hrefTarget);
          }

        });

      }
    }/////////////////////////////
    //Main pins function
    /////////////////////////////
    function createPins() {
      for(var i = 0; i < pins.length; i++){

        
		var text_inside = r.text(pins[i].xPos+5, pins[i].yPos+5, "CH").attr({fill: '#fff'});
		var pinattrs = {
          'cursor': 'pointer',
          'fill': pins[i].color,
          'stroke': config.strokeColor,
          'id': i,
		  'text':text_inside
        };
        var pin = r.rect(pins[i].xPos, pins[i].yPos, 20,17).attr(pinattrs);
        pin.node.id = i;
		
        pin.mouseover(function(e) {

          e.stopPropagation();

          var id = $(this.node).attr('id');

          //Animate if not already the current state
          if (this != current) {
            this.animate({
              fill: pins[id].hoverColor
            }, 500);
          }

          //tooltip
          showTooltip(pins[id].name);

        });

        pin.mouseout(function(e) {

          var id = $(this.node).attr('id');

          //Animate if not already the current state
          if (this != current) {
            this.animate({
              fill: pins[id].color
            }, 500);
          }

          removeTooltip();
          
        });

        pin.mouseup(function(e) {
          var id = $(this.node).attr('id');
          //Reset scrollbar
          var t = textArea[0];
          t.scrollLeft = 0;
          t.scrollTop = 0;

          //Animate previous state out
          if (current) {
            var curid = $(current.node).attr('id');
            current.animate({
              fill: isPin ? pins[curid].color : paths[curid].color
            }, 500);
          }
          isPin = true;

          //Animate next
          this.animate({
            fill: pins[id].selectedColor
          }, 500);

          current = this;

          if (config.useText == true) {
            textArea.html(pins[id].text);
          } else {
            window.open(pins[id].url, config.hrefTarget);
          }

        });

      }
    }

    /////////////////////////////
    //Resize map functions
    /////////////////////////////
    function resizeMap() {
      containerWidth = mapWrapper.parent().width();
      winWidth = win.width();

      if (config.useText) {

        //Force text to bottom on mobile
        useTextAtBottom = winWidth >= 767 ? config.useTextAtBottom : true;

        if (useTextAtBottom) {
          mapWidth = containerWidth;
          mapHeight = mapWidth / ratio;
          mapWrapper.css({
            'width': mapWidth + 'px',
            'height': mapHeight + 'px'
          });
          textArea.css({
            'width': mapWidth + 'px',
            'marginTop': mapHeight + 'px'
          });
        } 
        else {
          mapWidth = containerWidth - config.textAreaWidth;
          mapHeight = mapWidth / ratio;
          mapWrapper.css({
            'width': winWidth >= 767 ? mapWidth + config.textAreaWidth + 'px' : mapWidth + 'px',
            'height': mapHeight + 'px'
          });
          textArea.css({
            'width': winWidth >= 767 ? config.textAreaWidth + 'px' : mapWidth + 'px',
            'height': winWidth >= 767 ? mapHeight + 'px' : config.textAreaHeight,
            'display': 'inline',
            'float': winWidth >= 767 ? 'right' : 'none',
            'marginTop': winWidth >= 767 ? 0 : mapHeight + 'px'
          });
        }
      } 
      else {
        mapWidth = containerWidth;
        mapHeight = mapWidth / ratio;
        mapWrapper.css({
          'width': mapWidth + 'px',
          'height': mapHeight + 'px'
        });
      }

      r.changeSize(mapWidth, mapHeight, true, false);

    }

    /////////////////////////////
    //Tooltip
    /////////////////////////////
    function showTooltip(abb){
      $('.mapli').find('a').removeClass('active');
	  $('#list_state_'+abb.replace('&','')).addClass('active');
      removeTooltip();	  
      $('.lg-map-wrapper').before($('<div />').addClass('tooltip-map testtip'));	  
	  //var statearray;
	  if((abb in statearray))
	  {
		   var tool_tip_html = statearray[abb]['html'];
	  }else{
	  var tool_tip_html	='<div class="map-tip-text"><label>Policy in the process of being formulated</label></div>';
	  }
      $('.testtip').html(tool_tip_html);	
	  $('.testtip').css({
        //left: mouseX - '91' ,
        //top: (mouseY + parseInt(25))
		left: (mouseX-parseInt('105')),
		top: (mouseY+parseInt('24'))
      }).fadeIn();
    }

    function removeTooltip(){
     $('.tooltip-map').hide();
	 $('.testtip').remove();
	 // $('.testtip').attr('style','display:none');
    }


    /////////////////////////////
    //Mouse events
    /////////////////////////////

    // Main function to retrieve mouse x-y pos.s
    function getMouseXY(e) {
		e = e || window.event;
		e = jQuery.event.fix(e);
		mouseX = e.pageX;
        mouseY = e.pageY;
    }
	

    // Set-up to use getMouseXY function onMouseMove
  
		document.body.onmousemove = getMouseXY;
	

      function animateStateFormText(t, eleref)
	  {
		  var index_of	=	'-1';
		  var state_ref	=	null;
		  if(t=='DD')	/* for daman and DIU */
		  {
			  index_of	=	6;
		  }
		  if(t=='GA')	/* for GOA */
		  {
			  index_of	=	7;
		  }
		  if(t=='LD')	/* for Lakshadeep */
		  {
			  index_of	=	15;
		  }	  
		  if(t=='PY')	/* for Puducherry */
		  {
			  index_of	=	24;
		  }
		  if(t=='AN')	/* for Lakshadeep */
		  {
			  index_of	=	0;
		  }
		  if(t=='CH')	/* for CH */
		  {
			  index_of	=	35;
		  }
		  if(t=='DN')	/* for DN */
		  {
			  index_of	=	34;
		  }
		  if(t=='SK')	/* for sikiim */
		  {
			  index_of	=	26;
		  }
		  if(t=='TR')	/* for TR */
		  {
			  index_of	=	29;
		  }
		  if(index_of>=0)
		  {
			  shapeAr.forEach(function(thisArg){
					thisArg.animate({
						fill:paths[index_of].color
					});
				});
				shapeAr[index_of].animate({
					fill: paths[index_of].hoverColor
				}, 500);
				showTooltip(t);
		  }
		  else{
			  return false;
		  }
	  }

    /////////////////////////////
    //Init map
    /////////////////////////////
    createMap();
    //createPins();

  });
  


});