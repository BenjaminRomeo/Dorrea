// JavaScript Document
function preload(list, callback, imageCallback ) {
    var at = len = list.length;
    return list = list.map(function (item) {
        var pItem = new Image();
        pItem.onload = function (i) {
            imageCallback && imageCallback.call(this, this, len-at, len);
            if (!--at) {
                callback(list);
            }
        };
        pItem.src = item;
        return pItem;
    });
};

function arrayImage(size, baseUrl)
{
	var array=new Array();
	for(i=1; i<=size; i++)
	{
		array.push(baseUrl+i+'.png');
	}
	return array;
};

function loadjscssfile(filename, filetype){
    if (filetype=="js"){ 
		$('head').append('<link src="assets/javascript/'+filename+'" type="text/javascript" />');
    }
    else if (filetype=="css"){ 
		$('head').append('<link rel="stylesheet" href="assets/css/'+filename+'" type="text/css" />');
    }
}