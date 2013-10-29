
if( typeof RockYou === 'undefined' ) { window.RockYou = {} }

RockYou.Editor = (function() { // this is completely local so everything is hidden and will not interfere with names on 
	if( typeof window.RockYou.Editor.jquery == 'undefined' ) {
		alert("Missing define of <RockYou.Editor.jquery> variable in loading document!\nNeed Jquery 1.10.2 w/noConflict")
		return; // makes this an invalid object now
	}
	var self = this // save to make sure 'this' is avail in any context
	var jquery = window.RockYou.Editor.jquery;

	this.log = function(msg) {
		jquery( ".editor-log-window" ).append( "<div>" + msg + "</div>" );
	}

	this.save = function(templateName,topElementId) {
		// after saving is done, reload?
		var styleSheet = getCssStyleSheet(templateName) // only get base if nothing else is available
		console.log(styleSheet)
		var $node = jquery("#"+topElementId)
		var nodeStyles = getCssStylesFromNodes($node)
	}

	this.load = function(templateName) {

	}

	//////////////////////////////
	// Private 
	//////////////////////////////

	var getCssStyleSheet = function(sheetName) {
		if ( document.styleSheets ) {
			expression = new RegExp( sheetName, "i" )
			for (var i = 0; i < document.styleSheets.length; i++ ) {
				var sheet = document.styleSheets[i];
				if( expression.test(sheet.href) == true ) {
					for (var i=0; i < styleSheet.length; i++ ) {
						var rule = styleSheet[i]
						cssTexts.append(rule.cssText)
					}
					return cssTexts.join(',')
				}
			}
		}
		return ""
	}

	var setupActions = function() {
		jquery('#ad-frame').find('*').each( function(index) {
			console.log( index + " " + jquery(this).attr('class') )
			if( jquery(this).hasClass("not-draggable") == false) {
				jquery(this).draggable()
			}
		})
	}

	jquery(document).ready(function() {
		setupActions()
	})

	return this;
})();

/*
(function() {
	this.injectRestrictedCSS = function(){
        var xorcssDoc = getInjectedSheetsDocument(),
             xorSheets = [],
             sheets = document.styleSheets,
             sheetIndex = 0;

        $('LINK, :not(#cph_xorcss) STYLE').each(function () {
                $(this).attr('cph-ssorder', sheetIndex);
                sheetIndex++;
        });

        for (var s in sheets) {
            var thisSheet = sheets[s];
            if (!thisSheet.cssRules && thisSheet.href && thisSheet.href.indexOf('http') == 0 && !isPrintOnlyStylesheet(thisSheet.media)) // if no rules present for external stylesheet
                xorSheets.push([thisSheet.href, $(thisSheet.ownerNode).attr('cph-ssorder')]);
        }

        if (xorSheets.length > $(xorcssDoc).find('STYLE').length) { // check to see if there are new stylesheets to handle or if this is our first time injecting css
            $(xorcssDoc).find('HEAD').html(''); // clear previously injected stylesheets so that we don't affect performance with redundant sheets
            for (var x in xorSheets) {
                $.get(YQLURL(xorSheets[x][0]), injectSheet(xorSheets[x][1]));
            }
        }
	}

	function injectSheet(sheetIndex) {
        return function (xmlDoc) {
            if (xmlDoc) {
                try {
                    var xorcssDoc = getInjectedSheetsDocument(),
                        newStylesheet = document.createElement('style');
                    newStylesheet.type = 'text/css';
                    newStylesheet.setAttribute('cph-ssorder', sheetIndex);
                    newStylesheet.appendChild(document.createTextNode(xmlDoc.getElementsByTagName('p')[0].childNodes[0].nodeValue));
                    xorcssDoc.getElementsByTagName('head')[0].appendChild(newStylesheet);
                    newStylesheet.disabled = true;
                }
                catch(err) {
                    // console.log('error injecting');
                }
            }
        }
	}

	function getInjectedSheetsDocument() {
        return $('#cph_xorcss')[0].contentDocument;
	}

	function YQLURL(url) {
        return 'http' + (/^https/.test(location.protocol) ? 's' : '') + '://query.yahooapis.com/v1/public/yql' + // generate YQL URL containing query to fetch stylesheet via the stylesheets URL
                         '?q=' + encodeURIComponent('select * from html where url="' + url + '" and xpath="*"') +
                         '&format=xml';
	}

	function isPrintOnlyStylesheet(mediaList) {
        var isPrint = false;
        if (mediaList.length) {
            for (var m = 0; m < mediaList.length; m++) {
                if (mediaList[m] == 'screen')
                    return false;
                else if (mediaList[m] == 'print')
                    isPrint = true;
            }
        }
        return isPrint;
	}
	return this
})();
*/