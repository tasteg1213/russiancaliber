<script>
    BX.ready(function () {

        jsUtils.dellRow = function ($delId) {
            BX("element_" + $delId).remove();
        };

        jsUtils.upadteSort = function (thisEle, $delId, el) {


            var obj = BX.findParent(el,
                {className: 'product_model'});


            var new_value = thisEle.srcElement.value;

            if (new_value < 1) {
                new_value = 0
            }

            var objectDESC = BX.findChild(obj, {
                    tag: "input", className: "DESC"
                },
                true);
            var valueDesc = objectDESC.getAttribute("value");
            var desc = {};

            if (valueDesc == "") {
                desc.SORT = new_value;
                desc.SHORT_NAME = "";
                desc = JSON.stringify(desc)
            } else {
                valueDesc.replace(/["]/g, "\'")
                valueDesc = BX.parseJSON(valueDesc)
                desc.SORT = new_value;
                desc.SHORT_NAME = valueDesc.SHORT_NAME;
                desc = JSON.stringify(desc)
            }
            objectDESC.setAttribute("value", desc);
        };

        jsUtils.upadteShortName = function (thisEle, $delId, el) {
            var obj = BX.findParent(el,
                {className: 'product_model'});

            var new_value = thisEle.srcElement.value;

            if (new_value < 1) {
                new_value = 0
            }

            var objectDESC = BX.findChild(obj, {
                    tag: "input", className: "DESC"
                },
                true);
            var valueDesc = objectDESC.getAttribute("value");
            var desc = {};

            if (valueDesc == "") {
                desc.SHORT_NAME = new_value;
                desc.SORT = 0;
                desc = JSON.stringify(desc)
            } else {
                valueDesc.replace(/["]/g, "\'")
                valueDesc = BX.parseJSON(valueDesc)

                desc.SORT = valueDesc.SORT;
                desc.SHORT_NAME = new_value;
                desc = JSON.stringify(desc)
            }
            objectDESC.setAttribute("value", desc);
        }


        jsUtils.addNewRow = function (tableID, row_to_clone) {

            var tbl = document.getElementById(tableID);
            var cnt = tbl.rows.length;
            if (row_to_clone == null)
                row_to_clone = -2;


            var newR = tbl.rows[cnt + row_to_clone].cells[0];


            var productName = BX.findChildren(newR, {className: "product_model_name"}, true);
            BX.remove(productName[0]);

            var sort = BX.findChildren(newR, {className: "sort"}, true);
            BX(sort[0]).setAttribute("value", "-");

            var short_name = BX.findChildren(newR, {className: "short_name"}, true);
            BX(short_name[0]).setAttribute("value", "-");

            var DESC = BX.findChildren(newR, {className: "DESC"}, true);
            BX(DESC[0]).setAttribute("value", "");


            var sHTML = newR.innerHTML;
           // var pattNameProduct = new RegExp("<div.class\=\"product\_model\_name\">.*?<\/div>", "igs");
          //  var sHTML = sHTML.replace(pattNameProduct, "");


            var oRow = tbl.insertRow(cnt + row_to_clone + 1);
            var oCell = oRow.insertCell(0);

            var s, e, n, p;
            p = 0;
            while (true) {
                s = sHTML.indexOf('[n', p);
                if (s < 0) break;
                e = sHTML.indexOf(']', s);
                if (e < 0) break;
                n = parseInt(sHTML.substr(s + 2, e - s));
                sHTML = sHTML.substr(0, s) + '[n' + (++n) + ']' + sHTML.substr(e + 1);
                p = s + 1;
            }
            p = 0;
            while (true) {
                s = sHTML.indexOf('__n', p);
                if (s < 0) break;
                e = sHTML.indexOf('_', s + 2);
                if (e < 0) break;
                n = parseInt(sHTML.substr(s + 3, e - s));
                sHTML = sHTML.substr(0, s) + '__n' + (++n) + '_' + sHTML.substr(e + 1);
                p = e + 1;
            }
            p = 0;
            while (true) {
                s = sHTML.indexOf('__N', p);
                if (s < 0) break;
                e = sHTML.indexOf('__', s + 2);
                if (e < 0) break;
                n = parseInt(sHTML.substr(s + 3, e - s));
                sHTML = sHTML.substr(0, s) + '__N' + (++n) + '__' + sHTML.substr(e + 2);
                p = e + 2;
            }
            p = 0;
            while (true) {
                s = sHTML.indexOf('xxn', p);
                if (s < 0) break;
                e = sHTML.indexOf('xx', s + 2);
                if (e < 0) break;
                n = parseInt(sHTML.substr(s + 3, e - s));
                sHTML = sHTML.substr(0, s) + 'xxn' + (++n) + 'xx' + sHTML.substr(e + 2);
                p = e + 2;
            }
            p = 0;
            while (true) {
                s = sHTML.indexOf('%5Bn', p);
                if (s < 0) break;
                e = sHTML.indexOf('%5D', s + 3);
                if (e < 0) break;
                n = parseInt(sHTML.substr(s + 4, e - s));
                sHTML = sHTML.substr(0, s) + '%5Bn' + (++n) + '%5D' + sHTML.substr(e + 3);
                p = e + 3;
            }

            var htmlObject = {'html': sHTML};
            BX.onCustomEvent(window, 'onAddNewRowBeforeInner', [htmlObject]);
            sHTML = htmlObject.html;

            oCell.innerHTML = sHTML;
            var patt = new RegExp("<" + "script" + ">[^\000]*?<" + "\/" + "script" + ">", "ig");
            var code = sHTML.match(patt);
            if (code) {
                for (var i = 0; i < code.length; i++) {
                    if (code[i] != '') {
                        s = code[i].substring(8, code[i].length - 9);
                        jsUtils.EvalGlobal(s);
                    }
                }
            }

            if (BX && BX.adminPanel) {
                BX.adminPanel.modifyFormElements(oRow);
                BX.onCustomEvent('onAdminTabsChange');
            }

            setTimeout(function () {
                var r = BX.findChildren(oCell, {tag: /^(input|select|textarea)$/i});
                if (r && r.length > 0) {
                    for (var i = 0, l = r.length; i < l; i++) {
                        if (r[i].form && r[i].form.BXAUTOSAVE)
                            r[i].form.BXAUTOSAVE.RegisterInput(r[i]);
                        else
                            break;
                    }
                }
            }, 10);
        }


    });

</script>