(()=>{"use strict";var e,t={986:()=>{const e=window.wp.blocks,t=window.wp.element,r=(window.wp.i18n,window.wp.blockEditor),n=JSON.parse('{"u2":"fab-peda-blocks/fab-peda-banner"}');(0,e.registerBlockType)(n.u2,{edit:function(e){let{attributes:n,setAttributes:l}=e;return(0,r.useBlockProps)(),(0,t.createElement)("div",null,(0,t.createElement)("label",null,"Title"),(0,t.createElement)("input",{value:n.title,onChange:e=>{l({title:e.target.value})}}))},save:function(e){let{attributes:r}=e;return console.log("attributes in save",r),(0,t.createElement)("div",null,(0,t.createElement)("h1",null,r.title))}})}},r={};function n(e){var l=r[e];if(void 0!==l)return l.exports;var a=r[e]={exports:{}};return t[e](a,a.exports,n),a.exports}n.m=t,e=[],n.O=(t,r,l,a)=>{if(!r){var o=1/0;for(c=0;c<e.length;c++){r=e[c][0],l=e[c][1],a=e[c][2];for(var i=!0,s=0;s<r.length;s++)(!1&a||o>=a)&&Object.keys(n.O).every((e=>n.O[e](r[s])))?r.splice(s--,1):(i=!1,a<o&&(o=a));if(i){e.splice(c--,1);var u=l();void 0!==u&&(t=u)}}return t}a=a||0;for(var c=e.length;c>0&&e[c-1][2]>a;c--)e[c]=e[c-1];e[c]=[r,l,a]},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={574:0,595:0};n.O.j=t=>0===e[t];var t=(t,r)=>{var l,a,o=r[0],i=r[1],s=r[2],u=0;if(o.some((t=>0!==e[t]))){for(l in i)n.o(i,l)&&(n.m[l]=i[l]);if(s)var c=s(n)}for(t&&t(r);u<o.length;u++)a=o[u],n.o(e,a)&&e[a]&&e[a][0](),e[a]=0;return n.O(c)},r=self.webpackChunkfab_peda_blocks=self.webpackChunkfab_peda_blocks||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})();var l=n.O(void 0,[595],(()=>n(986)));l=n.O(l)})();