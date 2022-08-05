const autoCompleteJS = new autoComplete({
    placeHolder: "Введите название анализа...",
    data: {
        src: analysis,
        cache: true,
    },
    resultItem: {
        highlight: true
    },
    events: {
        input: {
            selection: (event) => {
                const selection = event.detail.selection.value;
                autoCompleteJS.input.value = selection;
            }
        }
    },
    submit: true,
    resultsList: {
        maxResults: 10,
    },
});

document.querySelector("#autoComplete").addEventListener("selection", function (event) {
    searchfrom.submit();
});

var clickEvent = new MouseEvent("click", {
    "view": window,
    "bubbles": true,
    "cancelable": false
});

function reload(){
    d = document.getElementById("select-groups").value;
    //window.location.href = '/clinic-widget?group=' + d;
    var cat = document.getElementById("cat" + d);
    cat.dispatchEvent(clickEvent);
}