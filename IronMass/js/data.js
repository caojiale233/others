var JSONobj={
	"shape":[
		{"name":"长方体",
		"input":{
			"key1":["a","b","c"],
			"key2":["长度&nbsp;/&nbsp;米","宽度&nbsp;/&nbsp;米","高度&nbsp;/&nbsp;米"]
		},
		"output":[
			"if(isNaN(a)||isNaN(b)||isNaN(c))alert('数据不完整');else volume=a*b*c;"
		],
		"tip":""
		},
		{"name":"圆柱",
		"input":{
			"key1":["a","b"],
			"key2":["直径&nbsp;/&nbsp;米","高度&nbsp;/&nbsp;米"]
		},
		"output":[
			"if(isNaN(a)||isNaN(b))alert('数据不完整');else volume=b*Math.PI*Math.pow(a,2)/4"
		],
		"tip":""
		},
		{"name":"圆管",
		"input":{
			"key1":["aa","bb","cc","d","e"],
			"key2":["外径&nbsp;/&nbsp;毫米","内径&nbsp;/&nbsp;毫米","壁宽&nbsp;/&nbsp;毫米","管长&nbsp;/&nbsp;米","数目&nbsp;/&nbsp;根"]
		},
		"output":[
			"if(isNaN(aa))aa=bb+cc;",
			"if(isNaN(bb))bb=aa-cc;",
			"if(isNaN(aa)||isNaN(bb)||isNaN(d)||isNaN(e))alert('数据不完整');else volume=Math.PI*(Math.pow(aa,2)-Math.pow(bb,2))*d*Math.pow(10,-6)*e"
		],
		"tip":"内径、外径、壁宽选填两项即可"
		}
	]
};
/*
{"name":"长方体",
		"input":{
			"key1":["a","b","c"],
			"key2":["长&nbsp;/&nbsp;米","宽&nbsp;/&nbsp;米","高&nbsp;/&nbsp;米"]
		},
		"output":[
			"volume=a*b*c",
			"if(isNaN(a)||isNaN(b)||isNaN(c))alert('数据不完整');else volume=a*b*c"
		],
		"tip":""
		},
*/