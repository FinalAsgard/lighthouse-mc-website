var getStartingColorMode = function(){
    if (getStartingColorMode.done) return;
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        var mode = "dark"
    } else {
        var mode = "light"
    }
    document.documentElement.dataset.colorMode = mode;
    document.documentElement.style.setProperty('color-scheme','light dark');
    getStartingColorMode.done = true;
}

getStartingColorMode()

function toggleLightMode(){
    if (document.documentElement.dataset.colorMode == "light"){
        document.documentElement.dataset.colorMode = "dark";
        document.documentElement.style.setProperty('color-scheme','dark');
        console.log("set color mode: dark");
    } else {
        document.documentElement.dataset.colorMode = "light";
        document.documentElement.style.setProperty('color-scheme','light');
        console.log("set color mode: light");
    }
}

window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
    const newColorScheme = event.matches ? "dark" : "light";
    console.log("external color mode toggle");
    if (document.documentElement.dataset.colorMode == newColorScheme) {
        if (newColorScheme == "light") {
            document.documentElement.dataset.colorMode = "dark";
            document.documentElement.style.setProperty('color-scheme','dark');
            console.log("set color mode: dark");
        } else {
            document.documentElement.dataset.colorMode = "light";
            document.documentElement.style.setProperty('color-scheme','light');
            console.log("set color mode: light");
        }
    } else {
        document.documentElement.dataset.colorMode = newColorScheme;
        document.documentElement.style.setProperty('color-scheme',newColorScheme);
        console.log("set color mode: ", newColorScheme);
    }
});
