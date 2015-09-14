/**
 * Created by Novi on 11.09.2015.
 */

var dom = (function () {
    var _root = 'document';

    var setRoot = 'sadasd';

    return {
        setR: function (root) {
            this._root = root;
        },

        getR: function () {
            return this._root;
        },

        root: function () {
            return eval(dom.getR());
        }
    }

}) ();