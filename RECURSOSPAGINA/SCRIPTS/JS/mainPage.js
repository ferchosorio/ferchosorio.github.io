// Creado por Fernando Osorio { C 0 D I N G }
lista = ["#D_Productos","#D_Nosotros","#D_Referencias","#D_Inicio"];
function ir(e) {
	lista.forEach(ids => document.querySelector(ids).style.display = "none");
	var aparece = document.querySelector("#D_"+e.id);
	aparece.style.display = "flex";
}
function irM(m) {
	document.querySelector('#btnMn').click();
	lista.forEach(idsM => document.querySelector(idsM).style.display = "none");
	var ids = m.id;
	var mm = ids.replace("M","");
	var apareceM = document.querySelector("#D_"+mm);
	apareceM.style.display = "flex";
}
function writter() {
	let writteT = document.querySelector('.writterT');
	let writte = document.querySelector('.writter');
	let writteT2 = document.querySelector('.writterT2');
	let writte2 = document.querySelector('.writter2');
	if (writteT2.style.display == "none") {
		writteT.style.display = "none";
		writte.style.display = "none";
		writteT2.style.display = "flex";
		writte2.style.display = "flex";
	}
	else {
		writteT.style.display = "flex";
		writte.style.display = "flex";
		writteT2.style.display = "none";
		writte2.style.display = "none";
	}
}setInterval(writter, 10000);
let menuMob = (e,menu) => {
	var menus = document.querySelector(menu);
	menus.style.display = "flex";
	lista.forEach(idsM => document.querySelector(idsM).style.display = "none");
	e.src = "RECURSOSPAGINA/DIR_IMAGENES/SVG/menu_desplegarV.svg";
	e.addEventListener('click', () => {
		if (menus.style.display == "flex") {
			menus.style.display = "none";
			document.querySelector("#D_Inicio").style.display = "flex";
			e.src = "RECURSOSPAGINA/DIR_IMAGENES/SVG/menu_desplegar.svg";
		}
		else {
			menus.style.display = "flex";
			lista.forEach(idsM => document.querySelector(idsM).style.display = "none");
			e.src = "RECURSOSPAGINA/DIR_IMAGENES/SVG/menu_desplegarV.svg";
		}
	});
}
let letre = (e,a,b,c,d) => {
	var des = document.querySelector(c);
	var letr = document.querySelector(b);
	var tex = document.querySelector(d);
	letr.innerText = a;
	letr.style.animation = "fadeIn .4s both";
	des.style.display = "flex";
	tex.innerText = "Más información";
	e.style.backgroundColor = "#00f3df";
	tex.style.color = "#101010";
}
let ltreOut = (e,b,c,d,f) => {
	var tex = document.querySelector(d);
	var des = document.querySelector(c);
	var letr = document.querySelector(b);
	letr.innerText = "";
	letr.style.animation = "";
	des.style.display = "none";
	e.style.backgroundColor = "#38383852";
	tex.style.color = "#00f3df";
	tex.innerText = f;
	tex.style.transition = "all .4s ease-in-out";
}