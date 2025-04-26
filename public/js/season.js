var getSeason = function(){
    if (getSeason.done) return;
    var currentTime = new Date();
    var month = currentTime.getMonth() + 1;
    console.log("current month: ",month);
    switch(month) {
        case 3:
        case 4:
        case 5:
            var season = "spring";
            console.log("season spring");
            break;
        case 6:
        case 7:
        case 8:
            var season = "summer";
            console.log("season summer");
            break;
        case 9:
        case 10:
        case 11:
            var season = "fall";
            console.log("season fall");
            break;
        case 1:
        case 2:
        case 12:
            var season = "winter";
            console.log("season winter");
            break;
        default:
            var season = "default";
            console.log("no season");
    }
    document.documentElement.dataset.season = season;
    getSeason.done = true;
}

getSeason()

function setSeason(season){
    document.documentElement.dataset.season = season;
    console.log("set season: ",season);
}
