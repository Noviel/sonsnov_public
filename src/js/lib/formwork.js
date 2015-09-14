function createElement(parentId, elemType, text){
    'use strict';
    
    var par = document.getElementById(parentId);
    
    if (par === null || elemType === null) {
        return null;
    }
    
    var element = document.createElement(elemType);
    
    par.appendChild(element);
    par.innerHTML = text;
   // par.classList.add(className);
    
    //var ret = document.querySelector
    
    return element;
}

function createInputForParentID(parent, labelText, type, id, name, inclass) {
    'use strict';
    var par = document.getElementById(parent);
    if (par === null) {
        return null;
    }

    var label, input, div;

    div = document.createElement('div');
    par.appendChild(div);
   // div.className = inclass;

    if (labelText !== "") {
        label = document.createElement('label');
        div.appendChild(label);
        label.innerHTML = labelText;
        label.htmlFor = id;
    }


    input = document.createElement('input');
    div.appendChild(input);
    input.placeholder = id;
    input.type = type;
    input.className = inclass;
    input.name = name;
    input.id = id;

    return input;
}

function createInputButton(parent, id, name, inclass,   value) {
    'use strict';
    var o = createInputForParentID(parent, "", "submit", id, name, inclass);
    if (o) {
        o.value = value;
    }
    return o;
}