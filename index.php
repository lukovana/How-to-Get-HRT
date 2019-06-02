/*
    CSS meant to encompass the entire site. INCLUDING mobile optimization
    blue        = #82c6ff = rgba(130, 198, 255, x)
    dark blue   = #4d9fd0;
    pink        = #ffa4d9 = rgba(255, 164, 217, x)
    dark pink   = 
    gray        = #656565;
    dark gray   = #454545;

*/
/*  FONTS           */
@font-face {
    font-family: Montserrat;
    src: url("../assets/fonts/Montserrat/Montserrat-Regular.ttf")
}

@font-face {
    font-family: "Montserrat Bold";
    src: url("../assets/fonts/Montserrat/Montserrat-SemiBold.ttf");
}

@font-face {
    font-family: "Montserrat Med";
    src: url("../assets/fonts/Montserrat/Montserrat-Medium.ttf");
}

/*  DEFAULT LAYOUT      */
body {
    display: grid;
    grid-template-areas:
        "headernav"
        "breadcrumb"
        "main"
        "footer";
}
#headernav {
    display: flex;
    align-items: center;
    justify-content: center;
}
#headernav {grid-area: headernav;}
main {grid-area: main;}
footer {grid-area: footer;} 
#breadcrumb {grid-area: breadcrumb;}

/*  GENERAL STYLES         */
body {
    font-family: Montserrat, Helvetica, sans-serif;
    height: 100vh;
    width: 100vw;
    margin: 0;
}
main {
    background: linear-gradient(to bottom, #ffffff 40%,#dddddd 80%,#aaaaaa 100%);
    height: 60vmin;
}
footer {
    /*height: 15vh;*/
    background-color: rgba(130, 198, 255, 0.9);
    color: #fff;
    padding: 2em;
    margin: 0;
}
/*  NAVIGATION STYLES       */
#headernav {
    background-color: #efefef;
    height: 10vh;
}
header {
    color: #fff;
    display: flex;
    align-items: center;
}
header img {
    float: left;
}
#headernav span a {
    font-family: "Montserrat Bold";
    color: #656565;
    text-decoration: none;
    font-size: 2em;
}
nav li a {
    text-decoration: none;
    color: #656565;
    padding: 1em;
}
nav ul {
    font-size: 1.2em;
    font-family: "Montserrat Med";
    text-transform: uppercase;
}
nav li, nav #dropdown {
    display: inline-block;
    transition: background-color 0.5s;
}
nav li:hover, nav #dropdown:hover {
    background-color: #82c6ff;
}
nav li a:hover, nav #dropdown .dropbutton a:hover {
	color: #fff;
}
#hamburger {
    display: none;
}
/*  DROPDOWN STYLES         */
.dropitems {
    display: grid;
    grid-template-areas:
        "A B C D E F";

	visibility: hidden;
    position: absolute;
    /*margin-left: -10em;*/
	background-color: rgba(244,240,236,0.0);
    z-index: 1;
    
    padding: 2em;
    max-height: 20em;
    min-width: 20em;
    opacity: 0;
    transition: opacity 0.5s;
}
.states:first-child {grid-area: A;}
.states:nth-child(2) {grid-area: B;}
.states:nth-child(3) {grid-area: C;}
.states:nth-child(4) {grid-area: D;}
.states:nth-child(5) {grid-area: E;}
.states:last-child {grid-area: F;}

.dropitems a {
	text-decoration: none;
	color: #fff;
    display: block;
    padding: 1em 1em 0 1em;
    font-size: 0.7em;
}
#dropdown:hover .dropitems {
	visibility: visible;
	background-color: #82c6ff;
    color: #fff;
    box-shadow: 2px 2px 10px #959595;
    opacity: 1.0;
}
.dropitems a:hover {
	color: #656565;
}
#dropdown:hover .dropbutton a {
	color: #fff;
}

/*  SEARCH BAR          */
#searchbar {
    display: grid;
    grid-auto-rows: 2em;
    width: 15em;
}
#searchbox {
    grid-row: 2;
    grid-column: 2 / 5;
    
    position: relative;
    top: -1em;
    left: -1em;
    
    padding-left: 1em;
    background-color: #fff;
    border: solid 3px #ffa4d9;
    font-family: Montserrat;
    border-radius: 50px;
    font-size: 1.2em;
    color: #656565;
    width: 80%;
    
    z-index: 1;
}

#searchimg {
    z-index: 2;
    grid-row: 1;
    background-color: #ffa4d9;
    padding: 1em;
    border-radius: 50%;
}

/*  BREADCRUMBS         */
#breadcrumb {
    background-color: rgba(130, 198, 255, 0.9);
    padding: 0.5em;
}
#breadcrumb li {
    display: inline-block;
    margin-left: 0.2em;
    margin-right: 0.2em;
    padding-top: 0.5em;
    padding-bottom: 0.5em;
    color: #fff;
}
#breadcrumb .current {
    font-family: "Montserrat Med";
}
#breadcrumb .statelink {
    font-family: "Montserrat Med";
    color: #fff;
}
#breadcrumb li a {
    color: #fff;
    text-decoration: none;
}
#breadcrumb li a:hover {
    color: #4d9fd0;
}

/* /* /* /* /* /* /* /* /* /* /* /*
/*         MEDIA QUERIES         /*
/* /* /* /* /* /* /* /* /* /* /* */
@media only screen and (max-width: 1200px) {
    #headernav {
        display: grid;
        display: flex;
        flex-wrap: nowrap;
        grid-template-columns: 30% 60% 10%;
        grid-template-areas:
            "header nav search";
    }
    header {grid-area: header;}
    nav {grid-area: nav;}
    #searchbar {grid-area: search;}
    #hamburger {grid-area: hamburger;}
    
    #searchbar {
        width: 6em;
    }
    
    #searchimg {
        margin-top: -1em;
        margin-right: 1em;
        z-index: 2;
        justify-self: flex-end;
    }
    #searchbox {
        position: absolute;
        visibility: hidden;
        width: 2%;
        left: 25em;
        top: 1.3em;
        z-index: 1;
        transition: width 2s;
    }
    #searchimg:hover ~ #searchbox {
        visibility: visible;
        width: 50%;
        
    }
}
@media only screen and (max-width: 1024px) {
    #headernav {
        display: grid;
        grid-template-columns: 65% 45%;
        grid-template-areas:
            "header search"
            "nav    nav";
    }
    header {
        margin-left: auto;
        margin-right: auto;
    }
    nav ul {
        background-color: #82c6ff;
        text-align: center;
    }
    nav li {
        margin: 0 -0.15em;
        padding: 1em 0;
    }
    nav li:hover {
        background-color: #656565;
    }
    #dropdown:hover .dropitems {
        visibility: hidden;
        opacity: 0.0;
    }
    #searchbar {
        width: 30em;
    }
    #searchimg {
        margin-top: 0em;
        justify-self: flex-start;
    }
    #searchbox {
        visibility: visible;
        position: relative;
        top: -1em;
        left: -3em;
        padding-left: 1em;
        width: 50%;
        transition: width 2s;
    }
    #searchimg:hover ~ #searchbox {
        width: 70%;
    }
}

@media only screen and (max-width: 640px) {
    #headernav {
        grid-template-columns: 65% 35%;
    }
    header {
        margin-right: auto;
    }
    #searchbar {
        width: 6em;
    }
    #searchimg {
        margin-top: -1em;
        margin-right: 1em;
        z-index: 2;
        justify-self: flex-end;
    }
    #searchbox {
        visibility: hidden;
        position: absolute;
        padding-left: 1em;
        width: 2%;
        left: 23.5em;
        top: 1em;
        z-index: 1;
        transition: width 2s;
    }
    #searchimg:hover ~ #searchbox {
        width: 15%;
    }
    
}
@media only screen and (max-width: 560px) {
    header span {display: none;}
    #headernav {
        height: 25vh;
        display: grid;
        grid-template-areas: 
            "header hamburger search"
            "nav nav nav";
    }
    header {
        margin-left: 1em;
    }
    #hamburger {
        grid-row: 1;
        grid-column: 2/3;
        
        display: table;
        background-color: #ffa4d9;
        padding: 1em;
        border-radius: 50%;
        width: 25px;
        height: 25px;
        
        margin: 0 0 0 -5em;
    }
    #searchbar {
        grid-row: 1;
        grid-column: 3/4;
        margin-left: -6.5em;
    }
    nav ul {
        position: absolute
        width: 100%;
        margin: 0 0 0 -2em;
        text-align: left;
    }
    nav li:not(.dropbutton) {
        display: block;
        border-top: solid 3px #656565;
    }
}