(function() {
            let allRows = document.querySelectorAll('tr');
            let minRow = {
                date: allRows[1].querySelectorAll('td')[2].innerText,
                val: parseFloat(allRows[1].querySelectorAll('td')[7].innerText)
            };
            let maxRow = {
                date: allRows[1].querySelectorAll('td')[2].innerText,
                val: parseFloat(allRows[1].querySelectorAll('td')[3].innerText)
            };
            for(let i = 2; i < allRows.length; ++i) {
                let valMax = parseFloat(allRows[i].querySelectorAll('td')[3].innerText);
                let valMin = parseFloat(allRows[i].querySelectorAll('td')[7].innerText);
                let date = allRows[1].querySelectorAll('td')[2].innerText;
                if (valMax > maxRow.val) {
                    maxRow.val = valMax;
                    maxRow.date = date;
                }
                if (valMin < minRow.val) {
                    minRow.val = valMin;
                    minRow.date = date;
                }
            }
            alert(`
                Min ${minRow.date}: val = ${minRow.val}
                Max ${maxRow.date}: val = ${maxRow.val}
            `);
        }());