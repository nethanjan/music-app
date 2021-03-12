function filterTypeToggle(type) {
    // toggle filters
    const divsToHide = document.getElementsByClassName("filter-options");
    for (let i = 0; i < divsToHide.length; i++) {
        divsToHide[i].style.display = "none";
    }

    // toggle selected text
    const divsToFade = document.getElementsByClassName("search-menu-item");
    for (let i = 0; i < divsToHide.length; i++) {
        if (divsToFade[i].className.includes("genre-G2B5sx-highlight")) {
            divsToFade[i].classList.remove("genre-G2B5sx-highlight");
            divsToFade[i].classList.add("genre-G2B5sx");
        }
        if (divsToFade[i].className.includes("instrument-G2B5sx-highlight")) {
            divsToFade[i].classList.remove("instrument-G2B5sx-highlight");
            divsToFade[i].classList.add("instrument-G2B5sx");
        }
        if (divsToFade[i].className.includes("energy-level-G2B5sx-highlight")) {
            divsToFade[i].classList.remove("energy-level-G2B5sx-highlight");
            divsToFade[i].classList.add("energy-level-G2B5sx");
        }
        if (divsToFade[i].className.includes("mood-G2B5sx-highlight")) {
            divsToFade[i].classList.remove("mood-G2B5sx-highlight");
            divsToFade[i].classList.add("mood-G2B5sx");
        }
    }
    const divToHighlight = document.getElementById(type + "Menu");
    divToHighlight.classList.remove(type + "-G2B5sx");
    divToHighlight.classList.add(type + "-G2B5sx-highlight");
    document.getElementById(type + "-options").style.display = "block";
}
