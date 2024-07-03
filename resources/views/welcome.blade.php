<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GoldEver</title>

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/img/android-chrome-512x512.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/img/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/img/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('storage/img/site.webmanifest')}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
            html{
scroll-behavior: smooth;
}

body{
margin:0;
overflow-x:hidden;
font-family: 'Titillium Web', sans-serif;
}

/* Thin Scrollbar */
:root{
  scrollbar-color: rgb(210,210,210) rgb(46,54,69) !important;
  scrollbar-width: thin !important;
}

.responsive{
display:none;
}
em{
font-style:normal;
color:#b91c1c;
}
.title{
font-size:2em;
display:block;
font-family: 'Yusei Magic', sans-serif;
}
.sub-title{
font-size:1em;
display:block;
font-family: 'Titillium Web', sans-serif;
}

/* Ensure ul is a block container */
#cart-items {
    display: block !important;
    font-size: 14px !important;
    color: #000 !important;
}

/* Ensure li elements are stacked vertically */
#cart-items li {
    display: block !important;
    margin-bottom: 1rem !important; /* Optional, for spacing between items */
}

.btn1{
background:#1e1e1e;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
color:#fff;
padding:5px 10px;
transition:0.5s;
border:0;
outline:none;
display:block;
width:100px;
text-align:center;
border-radius:20px;
margin:15px 0px;
}
.btn1:hover{
background:#fff;
color:#000;
border:1px solid #1e1e1e;
}
.btn2{
color:green;
display:block;
}
.soldout{
background:gray;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
color:#fff;
padding:5px 10px;
transition:0.5s;
border:0;
outline:none;
display:block;
width:100px;
text-align:center;
border-radius:20px;
margin:15px 0px;
}
.soldout:hover{
background:none;
border:none;
}
a{
text-decoration:none;
}
li{
list-style:none;
}




/*HEADER*/
header{
width:100%;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
position:fixed;
top:0;
z-index:9;
}

.menu{
width:100%;
background:#000;
color:#fff;
padding:10px;
}

.menu table{
width:100%;
}

.menu table td{
width:33%;
}

.menu .logo{
width:60px;
height:60px;
}

.menu input{
padding:10px;
outline:none;
border:0;
width:80%;
}

.menu button{
background:#b91c1c;
color:#fff;
padding:10px;
outline:none;
border:0;
}

@media (max-width:900px){
  .menu input{
   width:60%; 
  }
}

@media (max-width:600px){
.menu table td{
width:50%;
}
.menu table td:nth-child(3){
display:none;
}
.menu input{
width:65%;
}
}


.menu span{
float:right;
margin-right:15%;
}

.menu .dropdown {
  float: left;
  overflow: hidden;
}

.menu .dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: #fff;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.value{
text-align:center;
padding:2px;
color:#fff;
background:red;
position:relative;
top:-30px;
left:10px;
z-index:1;
border-radius:50%;
width:15px;
height:15px;
font-size:10px;
transition:0.5s;
}

.menu .navbar a:hover,.menu .dropdown:hover .dropbtn {
  background-color: #b91c1c;
  COLOR: #fff;
}

.menu .dropdown .cart:hover{
background:none;
color:#b91c1c;
}

.dropdown-content {
  border-top:2px solid #b91c1c;
  display: none;
  color: #b91c1c;
  position: absolute;
  background-color: #fff;
  min-width: 260px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.cart-content{
min-width:180px;
margin-bottom:20px;
position: absolute;
right:0;
}

.cart-content ul:hover{
background:#fff;
}

.cart-content ul{
width:100%;
padding:10px;
border-bottom:1px solid rgba(1,1,1,0.1);
}

.cart-content ul li{
display:inline-block;
}

.cart-content ul li img{
width:100%;
height:50px;
}

.cart-content ul li:nth-child(1){
width:30%;
}

.cart-content ul li:nth-child(2){
width:50%;
}

.cart-content ul li:nth-child(3){
width:10%;
}

.cart-content ul li:nth-child(3) i{
position:relative;
top:-15px;
transition:0.5s;
}

.cart-content ul li:nth-child(3) i:hover{
color:red;
}

.cart-content ul li .title{
font-size:0.7em;
display:inline-block;
}
.cart-content ul li .sub-title{
font-size:0.6em;
color:gray;
display:inline-block;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.topnav {
  overflow-x: hidden;
  overflow-y:auto;
  background-color: #fff;
  padding:0px 2%;
  
}

.topnav a {
  float: left;
  display: block;
  color: #1e1e1e;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 15px;
  margin:0px 20px;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 15px;    
  border: none;
  outline: none;
  color: #1e1e1e;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0px 30px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  overflow-y:auto;
scrollbar-width:none;
scroll-behavior: smooth;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #b91c1c;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media (max-width:1000px){
.dropdown .dropbtn, .topnav a {
margin:0px 10px;
font-size:14px;
padding:14px 8px;
}
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
  .value{
text-align:center;
padding:2px;
color:#fff;
background:red;
position:relative;
top:-10px;
left:5px;
z-index:1;
border-radius:50%;
width:20px;
height:10px;
font-size:10px;
transition:0.5s;
}
}

@media screen and (max-width: 600px) {
.topnav{
padding:0px 0%;
}
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav a,.dropdown .dropbtn {
  margin:0px 0px;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}

.column {
  float: left;
  width: 31.33%;
  background-color: #fff;
  height: 250px;
  padding:1%;
}

.column1 .column{
  float: left;
  width: 23%;
  background-color: #fff;
  height: 250px;
  padding:1%;
}

.column a {
  float: none;
  color: black;
  padding: 6px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.column a:hover {
  background-color: #ddd;
}

.column a:before {
content:"\f0da ";
font-family:"FontAwesome";
color:#b91c1c;
margin:0px 2px;
}

.column h3:after {
content:"\f0d7 ";
font-family:"FontAwesome";
color:#b91c1c;
margin:0px 2px;
}

.mega-dropdown{
width:100%;
float:left;
position:absolute;
left:0;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 90%;
    height: auto;
    padding:3%;
  }
  .column1 .column{
  float: left;
  width: 90%;
  background-color: #fff;
  height:auto;
  padding:3%;
}

  .responsive{
display:block;

}
}





/*CAROUSEL*/
.content-width {
  width: 100%;
  height: 70vh;
  margin: 0 auto;
  margin-top:10%;
}

.slideshow {
  position: relative;
  width: 100%;
  height: 70vh;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

.slideshow-items {
  position: relative;
  width: 100%;
  height: 70vh;
}

.item {
  position: absolute;
  width: 100%;
  height: auto;
}

.item-image-container {
  position: relative;
  width: 100%;
  height:70vh;
}

.item-image-container::before {
  content: '';
  position: absolute;
  top: -1px;
  left: 0;
  width: 101%;
  height: 90vh;
  background: #22222A;
  opacity: 0;
 
}

.item-image {
  position: relative;
  width: 100%;
  height: 100%;
  opacity: 0;
  display: block;
  /* transition: property name | duration | timing-function | delay  */
  transition: opacity .3s ease-out .45s;
}

.item.active .item-image {
  opacity: 1;
}

.item.active .item-image-container::before {
  opacity: .0;
}

.item-description {
  position: absolute;
  top: 50vh;
  left: 1.8%;
  width: 50%;
  color:#000;
  padding-right: 4%;
  line-height: 1.8;
  font-family: 'Exo 2', sans-serif;
}

/* Staggered Vertical Items ------------------------------------------------------*/
.item-header {
  position: absolute;
  top: 40vh;
  left: 1.8%;
}

.item-header .vertical-part {
  margin: 0 -4px;
  -webkit-font-smoothing: auto;
  font-size: 2vw;
  color: #000;
  font-family: 'Yusei Magic', sans-serif;
}

.desc b{
font-family: 'Titillium Web', sans-serif;
}

@media (max-width:600px){
.item-header .vertical-part {
font-size:3vw;
}
.content-width{
height:50vh;
}
.slideshow {
  position: relative;
  width: 100%;
  min-height: 50vh;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

.slideshow-items {
  min-height: 60vh;
}
.item-image-container {
  height:100vh;
}

.item-image-container::before {
  height: 100vh;
}
.item-description {
  position: absolute;
  top: 40vh;
  width: 90%;
  font-size:14px;
}
.item-header {
  position: absolute;
  top: 30vh;
}
}
.vertical-part {
  overflow: hidden;
  display: inline-block;
}

.vertical-part b {
  display: inline-block;
  transform: translateY(100%);
}

.item-header .vertical-part b {
  transition: .5s;
}

.item-description .vertical-part b {
  transition: .21s;
}

.item.active .item-header .vertical-part b {
  transform: translateY(0);
}

.item.active .item-description .vertical-part b {
  transform: translateY(0);
}

/* Controls ----------------------------------------------------------------------*/
.controls {
  position: relative;
  text-align: right;
  display:block;
}

.controls ul {
  list-style: none;
  float:left;
}

.controls ul li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 3px;
  background:#bdbdd5;;
  cursor: pointer;
}

.controls ul li.active {
  background:#6a6a77;;
}


@media (max-width:600px){
.content-width {
margin-top:15%;
}
.controls ul {
  list-style: none;
  position:absolute;
  top:-20vh;
}
}






/*SECTION1*/
.section1{
width:100%;
margin-right:auto;
margin-left:auto;
padding:20px;
overflow-x:hidden;
scrollbar-width:none;
scroll-behavior: smooth;
}

.section1 .add-card{
padding:20px;
border-radius:5px;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
width:26%;
margin:2%;
display:inline-block;
height:250px;
background-size:cover;
background: linear-gradient(rgba(1,1,1,.5), rgba(1,1,1,.5));
}

.section1 section{
color:#fff;
padding:30px 0px;
}

.section1 .btn1:hover{
background:transparent;
color:#fff;
border:1px solid #fff;
}

.section1 .title{
color:#b91c1c;
}

@media (max-width:1280px){
.section1 .add-card{
min-width:20%;
margin:1%;
}
}

@media (max-width:600px){
.section1{
position:relative;
display:flex;
align-items:left;
justify-content: left;
margin-top:10vh;
}
.section1 .add-card{
min-width:80%;
height:200px;
}
}





/*SECTION2*/
.section2{
width:100%;
padding:30px;
padding-top:0px;
}

.section2-header{
font-size:1.5em;
padding:20px;
}

#timer{
font-size:16px;
color:gray;
}

.section2 .deal-card{
display:inline-block;
padding:15px;
height:auto;
width:250px;
position:relative;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
transition:0.5s;
margin:10px;
}

.section2 .deal-card img{
width:100%;
height:200px;
transition:0.5s;
}

.section2 .deal-card:hover > img{
transform:scale(1.0);
}

.section2 .deal-card .discount{
position:absolute;
left:20px;
}

.section2 .deal-card .tag-1 i{
color:#fff;
}

.section2 .deal-card .tag-1{
background:green;
padding:5px 20px;
text-align:center;
color:#fff;
position:absolute;
right:20px;
font-size:13px;
z-index:1;
top:20px;
}

.section2 .deal-card .tag-2{
background:red;
padding:5px 20px;
text-align:center;
color:#fff;
position:absolute;
right:20px;
font-size:13px;
z-index:1;
top:20px;
}

.section2 .deal-card .title{
font-size:1em;
}

.section2 .deal-card .sub-title{
font-size:0.7em;
color:gray;
}

.section2 .advertise-card{
background-image:url("https://i.ibb.co/VMHGgsk/add-card.png");
background-size:cover;
background-position:center;
height:330px;
position:relative;
top:50px;
width:550px;
border-radius:5px;
}

@media (max-width:600px){
.section2 .title{
display:block;
min-width:90%;
height:10vh;
}
.section2 .advertise-card{
display:none;
}
.section2{
position:relative;
display:flex;
align-items:left;
justify-content: left;
margin-top:0vh;
overflow-x:hidden;
scrollbar-width:none;
scroll-behavior: smooth;
}

.section2-header{
margin-top:10vh;
}

.section2 .deal-card{
min-width:80%;
height:330px;
}
}




/*SECTION3*/
.section3{
width:100%;
height:45vh;
overflow-y:hidden;
padding:50px 30px;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
overflow-x:hidden;
position:relative;
display:flex;
align-items:left;
justify-content: left;
scrollbar-width:none;
scroll-behavior: smooth;
}

.section4{
width:100%;
min-height:40vh;
overflow-y:hidden;
padding:50px 30px;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
overflow-x:hidden;
position:relative;
display:flex;
align-items:left;
justify-content: left;
scrollbar-width:none;
scroll-behavior: smooth;
}

.section3-header,.section4-header{
padding:20px;
position:relative;
}

.section3-header .title,.section4-header .title{
font-size:1.8em;
margin-top:5vh;
}

.section3-header .viewmore,.section4-header .viewmore{
position:absolute;
right:20px;
top:20px;
background:#2874f0;
border-radius:3px;
}

.section3-header .viewmore:hover,.section4-header .viewmore:hover{
color:#fff;
background:#3399ff;
border:0;
}

.section3-header,.section4-header{
font-size:1em;
}

.section3 .discount-card,.section4 .discount-card{
padding:15px;
min-width:200px;
height:350px;
display:inline-block;
margin:0px 15px;
position:relative;
}

.section3 .discount-card a,.section4 .discount-card a{
position:absolute;
top:10px;
right:10px;
transition:0.5s;
}

.section3 .discount-card a:hover,.section4 .discount-card a:hover{
color:red;
}

.section3 .discount-card img,.section4 .discount-card img{
width:60%;
height:100px;
}

.section3 .discount-card .title,.section4 .discount-card .title{
font-size:1em;
}

.section3 .discount-card .btn1,.section4 .discount-card .btn1{
display:inline-block;
}

.section3 .discount-card .rating,.section4 .discount-card .rating{
color:gray;
}

.section3 .discount-card .checked,.section4 .discount-card .checked {
  color: orange;
}

.section3-header button,.section4-header button{
background:#fff;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
height:35vh;
width:50px;
font-size:30px;
z-index:111;
text-align:center;
border:0;
outline:none;
transition:0.5s;
}

.section3-header .next,.section4-header .next{
position:absolute;
right:0px;
top:25vh;
z-index:1;
}

.section3-header .previous,.section4-header .previous{
position:absolute;
left:0px;
top:25vh;
z-index:1;
}

.section3-header .next:hover,.section3-header .previous:hover,.section4-header .next:hover,.section4-header .previous:hover{
background:#b91c1c;
}

@media (max-width:600px){
.section3,.section4{
display:flex;
align-items:left;
justify-content: left;
}
.section3 .discount-card,.section4 .discount-card{
min-width:60%;
margin:0px 40px;
}
.section3-header .title,.section4-header .title{
font-size:1em;
}
  .section3-header .previous,.section4-header .previous,.section3-header .next,.section4-header .next{
   display:none; 
  }
}

.section4{
height:30vh;
}








/*ADDS*/
.Advertisement{
width:60%;
margin-left:auto;
margin-right:auto;
margin:10% 0%;
}

.Advertisement .myAdds{
height:150px;
display:none;
}




/*SECTION6*/
.section6{
width:100%;
background:#b91c1c;
position:relative;
}

.section6 table{
width:90%;
}

.section6 table td{
width:40%;
padding:30px;
}

.section6 table td img{
width:200px;
height:50vh;
position:absolute;
bottom:0;
margin-right:auto;
margin-left:auto;
pointer-events:none;
}

@media (max-width:600px){
.Advertisement{
width:90%;
}
.Advertisement .myAdds{
display:none;
}


.section6 table td{
padding:10px;
}
.section6 table td img{
width:40%;
height:40vh;
}
.section6 .title{
font-size:1.2em;
}
.section6 .sub-title{
font-size:0.8em;
}
}



/*FOOTER*/
.footer{
width:100%;
padding:30px 0px;
background:#000;
}

.footer ul{
width:20%;
padding:2%;
display:inline-block;
font-family: 'Play', sans-serif;
}

.footer ul .title{
color:#fff;
font-size:16px;
cursor:default;
}

.footer ul li{
color:gray;
font-size:13px;
padding:5px 0px;
cursor:pointer;
transition:0.5s;
}

.footer ul:not(:first-child) li:hover{
color:#f8a01a;
}

.footer ul li a{
color:gray;
transition:0.5s;
font-size:23px;
margin:0px 10px;
}

.footer ul li a:hover{
color:#fff;
}

.footer ul li input{
padding:10px 10px;
border:0;
outline:none;
width:100%;
}

.footer ul li select{
padding:5px;
background:#fff;
border:0;
outline:none;
width:60%;
}

.footer ul li .btn1{
padding:5px 10px;
font-size:14px;
width:50%;
height:50px;
}

.sub-footer{
text-align:center;
color:gray;
font-size:13px;
background:#1e1e1e;
padding:5px 0px;
}

@media (max-width:600px){
.footer ul{
width:90%;
display:block;
}

.footer ul:nth-child(2),.footer ul:nth-child(3){
width:45%;
display:inline-block;
}
.footer ul li input{
width:70%;
}
}









/*ADDITIONAL*/
/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 999; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {

  margin: 5% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%%;
  height:70vh; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #b91c1c;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}



.credits{
  background:#1e1e1e;
  padding:10px;
  position:fixed;
  bottom:20px;
  right:0;
  color:gray;
  font-size:12px;
  z-index:9999;
}

.credits a{
  text-decoration:none;
  color:gray;
}
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
     
        
        <header>
        <div class="menu">
        <table>
        <tr>
            <td class="flex items-center">
                <img src="{{ asset('storage/img/android-chrome-192x192.png') }}" alt="INFERNO" class="logo mr-2">
                <span>GOLDEVER</span>
            </td>
                    {{-- <td>
        <input type="text" class="search" name="search" placeholder="Search"><button type="submit"><i class="fa fa-search"></i></button>
        </td> --}}
        <td>
        <span>
        <div class="navbar">
          <div class="dropdown">
            <button class="dropbtn">Account 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="{{ route('login') }}">Profile</a>
              <a href="{{ route('login') }}">Orders</a>
              <a href="{{ route('login') }}">Wishlist</a>
              <a href="{{ route('login') }}">LogIn</a>
            </div>
          </div> 
          {{-- <div class="dropdown">
          <button class="dropbtn cart"><i class="fa fa-shopping-cart"></i><span class="value ml-2">0</span></button>
          <div class="dropdown-content cart-content hidden absolute right-0 mt-2 w-80 bg-white shadow-lg rounded-md">
              <ul id="cart-items" class="p-4">
                  <!-- cart items will be displayed here -->
              </ul>
              <div class="flex justify-between items-center p-4 border-t">
                  <span>Total: <i class="fa fa-rupee-sign"></i><span id="total-price">0</span></span>
                  <button type="submit" class="btn1 bg-blue-500 text-white p-2 rounded-md">CheckOut</button>
              </div>
          </div>
      </div> --}}
      <div class="dropdown">
        <button class="dropbtn flex items-center px-4 py-2 rounded-md">
            <i class="fa fa-shopping-cart"></i>
            <span class="value ml-2">0</span>
        </button>
        <div class="dropdown-content cart-content absolute right-0 mt-2 w-64 bg-white shadow-lg rounded-md hidden">
            <ul id="cart-items" class="p-4 space-y-4">
                <!-- cart items will be displayed here -->
                {{-- <li class="flex justify-between">
                    <span class="text-gray-700">Product Name</span>
                    <span class="text-gray-700"><i class="fa fa-rupee-sign"></i> Price</span>
                </li> --}}
                <!-- Repeat li elements for each item -->
            </ul>
            <div class="p-4 border-t">
                <span class="font-bold">Total: <i class="fa fa-rupee-sign"></i><span id="total-price">0</span></span>
                <button type="submit" class="btn1 bg-blue-500 text-white w-full mt-4 py-2 rounded-md">CheckOut</button>
            </div>
        </div>
    </div>
    
      {{-- <div class="dropdown">
    <button class="dropbtn flex items-center">
        <i class="fa fa-shopping-cart"></i><span class="value ml-2">0</span>
    </button>
    <div class="dropdown-content cart-content absolute right-0 mt-2 w-64 bg-white shadow-lg rounded-md hidden">
        <ul id="cart-items" class="p-4 space-y-4">
            <!-- cart items will be displayed here -->
        </ul>
        <div class="p-4 border-t">
            <span class="font-bold">Total: <i class="fa fa-rupee-sign"></i><span id="total-price">0</span></span>
            <button type="submit" class="btn1 bg-blue-500 text-white w-full mt-4 py-2 rounded-md">CheckOut</button>
        </div>
    </div>
</div> --}}
            {{-- <div class="dropdown">
              <button class="dropbtn cart"><i class="fa fa-shopping-cart"></i> <span class="value">0</span>
              </button>
              <div class="dropdown-content cart-content">
                <ul id="cart-items">
                  <!-- cart items will be displayed here -->
                </ul>
                <button type="submit" class="btn1">CheckOut</button>
            </div>
          </div>  --}}
        </div>
        </span>
        </td>
        </tr>
        </table>
        </div>
        
        <div class="topnav" id="myTopnav">
            @php $count = 0; @endphp
            @foreach($inventoryTypes as $category => $types)
                @if ($count < 4)
                    <div class="dropdown">
                        <button class="dropbtn">
                            {{ $category }}
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content mega-dropdown">
                            <div class="row column1">
                                @foreach($types as $type)
                                    <div class="column">
                                        <h3>{{ $type->type_name }}</h3>
                                        <a href="#">Notifications</a>
                                        <a href="#">Customer Care</a>
                                        <a href="#">Download App</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @php $count++; @endphp
                @else
                    @break
                @endif
            @endforeach
    
            @if ($count >= 4)
                <div class="dropdown">
                    <button class="dropbtn">
                        More Category
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content mega-dropdown">
                        @foreach($inventoryTypes->slice(6) as $category => $types)
                            <div class="row column1">
                                <div class="column">
                                    <h3>{{ $category }}</h3>
                                    @foreach($types as $type)
                                        <a href="#">{{ $type->type_name }}</a>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
    
            <div class="dropdown">
                <button class="dropbtn">Others 
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="#">Notifications</a>
                  <a href="#">Customer Care</a>
                  <a href="#">Download App</a>
                </div>
            </div> 
        
            
            <div class="dropdown responsive">
                <button class="dropbtn">Account 
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="#">Profile</a>
                  <a href="#">Orders</a>
                  <a href="#">Wishlist</a>
                  <a href="#">Login</a>
                </div>
            </div> 
            
            {{-- <div class="dropdown relative">
              <button class="dropbtn flex items-center">
                  <i class="fa fa-shopping-cart"></i><span class="value ml-2" id="cart-count">0</span>
              </button>
              <div class="dropdown-content cart-content absolute right-0 mt-2 w-64 bg-white shadow-lg rounded-md hidden">
                  <ul id="cart-items" class="p-4 space-y-4">
                      <!-- cart items will be displayed here -->
                  </ul>
                  <div class="p-4 border-t">
                      <span class="font-bold">Total: <i class="fa fa-rupee-sign"></i><span id="total-price">0</span></span>
                      <button type="submit" class="btn1 bg-blue-500 text-white w-full mt-4 py-2 rounded-md">CheckOut</button>
                  </div>
              </div>
          </div> --}}
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
        </header>
        
        
        {{-- <!--CAROUSEL-->
        <div class="content-width">
          <div class="slideshow">
            <!-- Slideshow Items -->
            <div class="slideshow-items">
              <div class="item">
                <div class="item-image-container">
                  <img class="item-image" src="{{ asset('storage/img/carousel-1.png') }}" />
                </div>
                <!-- Staggered Header Elements -->
                <div class="item-header">
                  <span class="vertical-part"><b>June Striking Deals</b></span>
                </div>
                <!-- Staggered Description Elements -->
                <div class="item-description">
                  <span class="vertical-part desc">
                    <b>Offers you cannot miss! upto 80% off</b>
                  </span>  
                </div>
              </div>
              <div class="item">
                <div class="item-image-container">
                  <img class="item-image" src="{{ asset('storage/img/carousel-2.png') }}" />
                </div>
                <!-- Staggered Header Elements -->
                <div class="item-header">
                  <span class="vertical-part"><b> <em></em></b></span>
                </div>
                <!-- Staggered Description Elements -->
                <div class="item-description">
                  <span class="vertical-part desc">
                  
                  </span>
                </div>
              </div>
              <div class="item">
                <div class="item-image-container">
                  <img class="item-image" src="{{ asset('storage/img/carousel-3.png') }}" />
                </div>
                <!-- Staggered Header Elements -->
                <div class="item-header">
                  <span class="vertical-part" style="color:#fff;"><b>ShopNow On <em>GoldEVer</em></b></span>
                </div>
                <!-- Staggered Description Elements -->
                <div class="item-description">
                  <span class="vertical-part desc" style="color:#fff;">
                    <b>Great Deals and Values within our community</b>
                  </span>
                </div>
              </div>
            </div>
            <div class="controls">
              <ul>
                <li class="control" data-index="0"></li>
                <li class="control" data-index="1"></li>
                <li class="control" data-index="2"></li>
              </ul>
            </div>
          </div>
        </div>
         --}}
        
        {{-- <section class="section1">
        <div class="add-card" style="background: linear-gradient(rgba(1,1,1,.5), rgba(1,1,1,.5)), url(https://i.ibb.co/zmnBPpr/card1.jpg);">
        <section>
        <span class="title">New Year Bonanza</span>
        <span class="sub-title">Upto 25% Off On Washing Machines</span>
        <a href="" class="btn1">Grab Now</a>
        </section>
        </div>
        <div class="add-card" style="background: linear-gradient(rgba(1,1,1,.5), rgba(1,1,1,.5)), url(https://i.ibb.co/rH35598/card2.jpg);">
        <section>
        <span class="title">New Year Bonanza</span>
        <span class="sub-title">Upto 25% Off On Washing Machines</span>
        <a href="" class="btn1">Grab Now</a>
        </section>
        </div>
        <div class="add-card" style="background: linear-gradient(rgba(1,1,1,.5), rgba(1,1,1,.5)), url(https://i.ibb.co/b1pfh8c/card3.jpg);">
        <section>
        <span class="title">New Year Bonanza</span>
        <span class="sub-title">Upto 25% Off On Washing Machines</span>
        <a href="" class="btn1">Grab Now</a>
        </section>
        </div>
        </section>
         --}}
        
        <h1 class="title section2-header">HARDWARE PRODUCTS <span id="timer"><i class="fa fa-clock-o"></i></span></h1>
        <section class="section2">
          
          <div class="inventory-all">
            @foreach ($inventoryTypes as $types)
                @foreach ($types as $type)
                    @foreach ($type->inventories as $inventory)
                        @foreach ($inventory->logistics as $logistic)
                        <div class="deal-card">
                          <img src="{{ asset('storage/' . $inventory->inv_image) }}" alt="{{ $inventory->inv_name }}">
                          <span class="title">{{ $inventory->inv_name }}</span>
                          <span class="sub-title">{{ $inventory->inv_brand }}</span>
                          <span class="price">{{ $logistic->inv_price }}</span>
                          <span class="sub-title">{{ $inventory->inv_description }}</span>
                          <span class="sub-title">Quantity: {{ $logistic->inv_quantity }}</span>
                          <button class="add-to-cart bg-red-800 text-red-800 py-2 px-4 text-sm font-bold rounded-full shadow-md flex items-center justify-center" data-inventory-id="{{ $inventory->id }}">
                              <a href="{{ route('login') }}" class="flex items-center">
                                  <i class="fas fa-shopping-cart mr-2"></i>
                              </a>
                          </button>
                      </div>
                      
                        @endforeach
                    @endforeach
                @endforeach
            @endforeach
        </div>
        
        
      
        
        {{-- <div class="deal-card">
        <img src="https://i.ibb.co/b1pfh8c/card3.jpg" alt="Deals">
        <span class="discount"><i class="fa fa-percentage"></i> 20% OFF</span>
        <span class="tag-1"><i class="fa fa-check-circle-o"></i> Available</span>
        <span class="title">Samsung Galaxy POP</span>
        <span class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
        <a href="#" class="btn1"><i class="fa fa-rupee"></i> 5999</a>
        </div>
        
        <div class="deal-card">
        <img src="https://i.ibb.co/b1pfh8c/card3.jpg" alt="Deals">
        <span class="discount"><i class="fa fa-percentage"></i> 20% OFF</span>
        <span class="tag-1"><i class="fa fa-check-circle-o"></i> Available</span>
        <span class="title">Samsung Galaxy POP</span>
        <span class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
        <a href="#" class="btn1"><i class="fa fa-rupee"></i> 5999</a>
        </div>
        
        <div class="deal-card">
        <img src="https://i.ibb.co/b1pfh8c/card3.jpg" alt="Deals">
        <span class="discount"><i class="fa fa-percentage"></i> 20% OFF</span>
        <span class="tag-1"><i class="fa fa-check-circle-o"></i> Available</span>
        <span class="title">Samsung Galaxy POP</span>
        <span class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
        <a href="#" class="btn1"><i class="fa fa-rupee"></i> 5999</a>
        </div>
        
        <div class="deal-card">
        <img src="https://i.ibb.co/b1pfh8c/card3.jpg" alt="Deals">
        <span class="discount"><i class="fa fa-percentage"></i> 20% OFF</span>
        <span class="tag-1"><i class="fa fa-check-circle-o"></i> Available</span>
        <span class="title">Samsung Galaxy POP</span>
        <span class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
        <a href="#" class="btn1"><i class="fa fa-rupee"></i> 5999</a>
        </div> --}}
        
        {{-- <div class="deal-card">
        <img src="https://i.ibb.co/b1pfh8c/card3.jpg" alt="Deals">
        <span class="discount"><i class="fa fa-percentage"></i> 20% OFF</span>
        <span class="tag-1"><i class="fa fa-check-circle-o"></i> Available</span>
        <span class="title">Samsung Galaxy POP</span>
        <span class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
        <a href="#" class="btn1"><i class="fa fa-rupee"></i> 5999</a>
        </div>
        
        
        <div class="deal-card advertise-card">
        
        </div>
        </section>
        
        
        <div class="section3-header">
        <span class="title">BASED ON YOUR INTEREST</span>
        <a href="#" class="btn1 viewmore">View More</a>
        <button class="next" onclick='scrollright()'><i class="fa fa-angle-right"></i></button>
        <button class="previous" onclick='scrollleft()'><i class="fa fa-angle-left"></i></button>
        </div>
        <section class="section3" id="section3">
        <div class="discount-card">
        <img src="https://i.ibb.co/RpnQq12/01.webp" alt="Product">
        <a href="#" class="like-button"><i class="fa fa-heart-o"></i></a>
        <span class="title">Lenovo-na thin laptop with 4gb ram 500gb hard disk</span>
        <span class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        (1,030)
        </span>
        <span class="btn1"><i class="fa fa-rupee"></i>9999</span> <strike><i class="fa fa-rupee"></i>10200</strike>
        </div>
        
        <div class="discount-card">
        <img src="https://i.ibb.co/RpnQq12/01.webp" alt="Product">
        <a href="#" class="like-button"><i class="fa fa-heart-o"></i></a>
        <span class="title">Lenovo-na thin laptop with 4gb ram 500gb hard disk</span>
        <span class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        (1,030)
        </span>
        <span class="btn1"><i class="fa fa-rupee"></i>9999</span> <strike><i class="fa fa-rupee"></i>10200</strike>
        </div>
        
        <div class="discount-card">
        <img src="https://i.ibb.co/RpnQq12/01.webp" alt="Product">
        <a href="#" class="like-button"><i class="fa fa-heart-o"></i></a>
        <span class="title">Lenovo-na thin laptop with 4gb ram 500gb hard disk</span>
        <span class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        (1,030)
        </span>
        <span class="btn1"><i class="fa fa-rupee"></i>9999</span> <strike><i class="fa fa-rupee"></i>10200</strike>
        </div>
        
        <div class="discount-card">
        <img src="https://i.ibb.co/RpnQq12/01.webp" alt="Product">
        <a href="#" class="like-button"><i class="fa fa-heart-o"></i></a>
        <span class="title">Lenovo-na thin laptop with 4gb ram 500gb hard disk</span>
        <span class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        (1,030)
        </span>
        <span class="btn1"><i class="fa fa-rupee"></i>9999</span> <strike><i class="fa fa-rupee"></i>10200</strike>
        </div>
        
        <div class="discount-card">
        <img src="https://i.ibb.co/RpnQq12/01.webp" alt="Product">
        <a href="#" class="like-button"><i class="fa fa-heart-o"></i></a>
        <span class="title">Lenovo-na thin laptop with 4gb ram 500gb hard disk</span>
        <span class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        (1,030)
        </span>
        <span class="btn1"><i class="fa fa-rupee"></i>9999</span> <strike><i class="fa fa-rupee"></i>10200</strike>
        </div>
        
        <div class="discount-card">
        <img src="https://i.ibb.co/RpnQq12/01.webp" alt="Product">
        <a href="#" class="like-button"><i class="fa fa-heart-o"></i></a>
        <span class="title">Lenovo-na thin laptop with 4gb ram 500gb hard disk</span>
        <span class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        (1,030)
        </span>
        <span class="btn1"><i class="fa fa-rupee"></i>9999</span> <strike><i class="fa fa-rupee"></i>10200</strike>
        </div>
        
        <div class="discount-card">
        <img src="https://i.ibb.co/RpnQq12/01.webp" alt="Product">
        <a href="#" class="like-button"><i class="fa fa-heart-o"></i></a>
        <span class="title">Lenovo-na thin laptop with 4gb ram 500gb hard disk</span>
        <span class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        (1,030)
        </span>
        <span class="btn1"><i class="fa fa-rupee"></i>9999</span> <strike><i class="fa fa-rupee"></i>10200</strike>
        </div>
        </section>
          
          
        <div class="section4-header">
        <span class="title">DISCOUNT CORNER</span>
        <a href="#" class="btn1 viewmore">View More</a>
        <button class="next" onclick='scrollright4()'><i class="fa fa-angle-right"></i></button>
        <button class="previous" onclick='scrollleft4()'><i class="fa fa-angle-left"></i></button>
        </div>
        <section class="section4" id="section4">
        <div class="discount-card">
        <img src="https://i.ibb.co/jGxYmxS/02.webp" alt="Product">
        <a href="#" class="like-button"><i class="fa fa-heart-o"></i></a>
        <span class="title">Chimney</span>
        <span class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        (930)
        </span>
        <span class="btn2">Fast Sold</span>
        </div> --}}
        
        {{-- <div class="discount-card">
        <img src="https://i.ibb.co/x7mNFvp/05.webp" alt="Product">
        <a href="#" class="like-button"><i class="fa fa-heart-o"></i></a>
        <span class="title">Casino Men's Classic</span>
        <span class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        (2,400)
        </span>
        <span class="btn2">Grab Now</span>
        </div>
         --}}
        {{-- <div class="discount-card">
        <img src="https://i.ibb.co/Mgjcss5/03.webp" alt="Product">
        <a href="#" class="like-button"><i class="fa fa-heart-o"></i></a>
        <span class="title">Mixer Juice Grinder</span>
        <span class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        (230)
        </span>
        <span class="btn2">30% Off</span>
        </div> --}}
        
        {{-- <div class="discount-card">
        <img src="https://i.ibb.co/x7mNFvp/05.webp" alt="Product">
        <a href="#" class="like-button"><i class="fa fa-heart-o"></i></a>
        <span class="title">Casino Men's Classic</span>
        <span class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        (2,400)
        </span>
        <span class="btn2">Grab Now</span>
        </div> --}}
        
        {{-- <div class="discount-card">
        <img src="https://i.ibb.co/jGxYmxS/02.webp" alt="Product">
        <a href="#" class="like-button"><i class="fa fa-heart-o"></i></a>
        <span class="title">Chimney</span>
        <span class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        (930)
        </span>
        <span class="btn2">Fast Sold</span>
        </div> --}}
        
        {{-- <div class="discount-card">
        <img src="https://i.ibb.co/RpnQq12/01.webp" alt="Product">
        <a href="#" class="like-button"><i class="fa fa-heart-o"></i></a>
        <span class="title">Lenovo-na thin laptop with 4gb ram 500gb hard disk</span>
        <span class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        (1,030)
        </span>
        <span class="btn1">New Eve Deal</span>
        </div> --}}
        
        {{-- <div class="discount-card">
        <img src="https://i.ibb.co/RpnQq12/01.webp" alt="Product">
        <a href="#" class="like-button"><i class="fa fa-heart-o"></i></a>
        <span class="title">Lenovo-na thin laptop with 4gb ram 500gb hard disk</span>
        <span class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        (1,030)
        </span>
        <span class="btn1"><i class="fa fa-rupee"></i>9999</span> <strike><i class="fa fa-rupee"></i>10200</strike>
        </div>
        </section> --}}
        
        
        
        
        
        <!--ADDS-->
        <center>
        <div class="Advertisement">
          <img class="myAdds" src="https://i.ibb.co/r5f5GgH/1.png" style="width:100%">
          <img class="myAdds" src="https://i.ibb.co/bN4XFXp/2.png" style="width:100%">
          <img class="myAdds" src="https://i.ibb.co/nfpZj9p/3.png" style="width:100%">
        </div>
        </center>
        
        
        
        
        <section class="section6">
        <table>
        <tr>
     
        <td>
        <span class="title">GoldEver Hardware Store</span>
        </td>
        </tr>
        </table>
        </section>
        
        
        
        <footer>
        <div class="footer">
        <ul>
        <li>GOLDEVER</li>
       
   
        </ul>
        
        <ul>
        <li class="title">OTHER LINKS</li>
        <li>Contact Us</li>
        <li>Privacy Policy</li>
        <li>Terms & Conditions</li>
   
        </ul>
        
        <ul>
        <li class="title">SHORTCUT</li>
        <li>Hardware</li>
        <li>Screws</li>
        <li>Paints</li>
        <li>Polishing</li>
 
        </ul>
        
        <ul>
        <li class="title">LET HELP YOU</li>
        <li>Your Account</li>
        <li>Help</li>
        <li>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
        </li>
        </ul>
        </div>
        <div class="sub-footer">
        <em>GoldEver</em> Copyright © 2024 Goldever - All rights reserved
        </div>
        </footer>
        
        
        
        
        <!--ADDITIONAL-->
        {{-- <div id="id01" class="modal">
          
          <section class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>
            </section>
        </div> --}}
        
        
        <!--JAVASCRIPT
        <script src="js/custom.js"></script>
        <script src="js/adds.js"></script>
        -->
          
          
     
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        
          
        

          <script>$(document).ready(function() {
            let itemCount = 0; // Initialize item count
        
            function updateCartCount(count) {
                itemCount = count;
                document.getElementById('cart-count').innerText = itemCount;
            }
        
            var cartItems = [];
            var inventories = @json($inventories);
            var logistics = @json($logistic); // Assuming logistics is an object with item prices
        
            $(document).on('click', '.add-to-cart', function() {
                var inventoryId = $(this).data('inventory-id');
                var inventory = inventories.find(function(inventory) {
                    return inventory.id === inventoryId;
                });
        
                if (inventory) {
                    var existingItem = cartItems.find(function(item) {
                        return item.id === inventoryId;
                    });
        
                    if (existingItem) {
                        existingItem.userQuantity += 1;
                    } else {
                        var newItem = {
                            id: inventory.id,
                            inv_name: inventory.inv_name,
                            inv_image: inventory.inv_image,
                            userQuantity: 1
                        };
                        cartItems.push(newItem);
                    }
        
                    updateCart();
                }
            });
        
            $(document).on('click', '.remove-from-cart', function() {
                var inventoryId = $(this).data('inventory-id');
                var item = cartItems.find(function(inventory) {
                    return inventory.id === inventoryId;
                });
        
                if (item) {
                    item.userQuantity -= 1;
                    if (item.userQuantity === 0) {
                        cartItems = cartItems.filter(function(inventory) {
                            return inventory.id !== inventoryId;
                        });
                    }
                }
        
                updateCart();
            });
        
            $(document).on('change', '.item-quantity', function() {
                var inventoryId = $(this).data('inventory-id');
                var newQuantity = parseInt($(this).val());
        
                var item = cartItems.find(function(inventory) {
                    return inventory.id === inventoryId;
                });
        
                if (item && newQuantity > 0) {
                    item.userQuantity = newQuantity;
                } else if (item && newQuantity === 0) {
                    cartItems = cartItems.filter(function(inventory) {
                        return inventory.id !== inventoryId;
                    });
                }
        
                updateCart();
            });
        
            function updateCart() {
                $('#cart-items').html('');
                var totalPrice = 0;
        
                cartItems.forEach(function(item) {
                    var imageUrl = `{{ asset('storage/${item.inv_image}') }}`;
        
                    function updateCart() {
                $('#cart-items').html('');
                var totalPrice = 0;
        
                cartItems.forEach(function(item) {
                    var imageUrl = `{{ asset('storage/${item.inv_image}') }}`;
        
                    var html = `
 <li class="mb-4 pb-4 flex items-center justify-between">
    <div>
        <span class="block font-semibold text-lg text-gray-800">${item.inv_name}</span>
        <span class="block text-gray-600 text-sm">Price: PHP ${logistics.inv_price}</span>
        <span class="block text-gray-600">Quantity:</span>
        <input type="number" class="item-quantity w-16 p-2 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 mt-2" data-inventory-id="${item.id}" value="${item.userQuantity}" min="1">
    </div>
    <div class="flex items-center space-x-2">
        <button class="remove-from-cart bg-red-500 hover:bg-red-600 text-white p-2 rounded-md shadow-md" data-inventory-id="${item.id}"><i class="fa fa-minus"></i></button>
        <button class="add-to-cart bg-green-500 hover:bg-green-600 text-white p-2 rounded-md shadow-md" data-inventory-id="${item.id}"><i class="fa fa-plus"></i></button>
    </div>
</li>


`;

        
                    $('#cart-items').append(html);
                    totalPrice += logistics.inv_price * item.userQuantity;
                });
        
                $('#total-price').text(totalPrice);
                $('.value').text(cartItems.length);
        
                // Toggle dropdown content visibility
                if (cartItems.length > 0) {
                    $('.cart-content').removeClass('hidden');
                } else {
                    $('.cart-content').addClass('hidden');
                }
            }
        });
        
        

        
                    $('#cart-items').append(html);
                    totalPrice += logistics.inv_price * item.userQuantity;
                });
        
                $('#total-price').text(totalPrice);
                $('.value').text(cartItems.length);
        
                // Toggle dropdown content visibility
                if (cartItems.length > 0) {
                    $('.cart-content').removeClass('hidden');
                } else {
                    $('.cart-content').addClass('hidden');
                }
            }
        });
        
        


let intervalF = setInterval(slider.nextSlide, interval);
slider.init();













// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2023 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("timer").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "EXPIRED";
  }
}, 1000);







/*CARD_SCROLLER*/
document.addEventListener("click", closeAllSelect);
function scrollright(){
  document.getElementById("section3").scrollLeft += 400;
}
function scrollleft(){
  document.getElementById("section3").scrollLeft -= 400;
}
/*CARD_SCROLLERENDS*/

/*CARD_SCROLLER*/
document.addEventListener("click", closeAllSelect);
function scrollright4(){
  document.getElementById("section4").scrollLeft += 400;
}
function scrollleft4(){
  document.getElementById("section4").scrollLeft -= 400;
}
/*CARD_SCROLLERENDS*/






var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



          </script>
    </body>
</html>
