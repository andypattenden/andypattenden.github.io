/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-twitter' : '&#xe003;',
			'icon-facebook' : '&#xe004;',
			'icon-instagram' : '&#xe005;',
			'icon-forrst' : '&#xe006;',
			'icon-linkedin' : '&#xe007;',
			'icon-skype' : '&#xe008;',
			'icon-google-plus' : '&#xe009;',
			'icon-code' : '&#xe00a;',
			'icon-users' : '&#xe00b;',
			'icon-tablet' : '&#xe00d;',
			'icon-palette' : '&#xe00f;',
			'icon-mobile' : '&#xe010;',
			'icon-brush' : '&#xe011;',
			'icon-screen' : '&#xe012;',
			'icon-house' : '&#xe013;',
			'icon-mail' : '&#xe00c;',
			'icon-arrow-up' : '&#xe00e;',
			'icon-tools' : '&#xe014;',
			'icon-statistics' : '&#xe015;',
			'icon-loop' : '&#xe000;',
			'icon-list' : '&#xe001;',
			'icon-play' : '&#xe002;',
			'icon-untitled' : '&#xf000;',
			'icon-github' : '&#xe016;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};