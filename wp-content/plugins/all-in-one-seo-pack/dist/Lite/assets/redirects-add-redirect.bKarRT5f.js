import{v as a,c as h,B as f,l as n,b as c,o as d,C as _,t as g,a as y,k as R,V as C}from"./js/runtime-dom.esm-bundler.tPRhSV4q.js";import{l as w}from"./js/index.0vjAWxAz.js";import{l as A}from"./js/index.Dbgw3oZ8.js";import{u as k,A as S,l as v}from"./js/links.Byq_3x2e.js";/* empty css                */import{a as E}from"./js/addons.LwNCCWfH.js";import{C as L}from"./js/Index.CXKd2N9v.js";import{C as b}from"./js/Index.CoGLBdzo.js";import{_ as x}from"./js/_plugin-vue_export-helper.BN1snXvA.js";import{i as H}from"./js/isEmpty.CR7CQK4F.js";import"./js/default-i18n.DXRQgkn2.js";import"./js/constants.CPpKID74.js";import"./js/Caret.Ke5gylGO.js";import"./js/helpers.CXsRrhc8.js";import"./js/upperFirst.yVnsg4QL.js";import"./js/_stringToArray.DnK4tKcY.js";import"./js/toString.zLSwYOtv.js";import"./js/JsonValues.D25FTfEu.js";import"./js/ProBadge.CVd2ImKm.js";import"./js/External.BnlDuPIp.js";import"./js/escapeRegExp.D4cfHJVO.js";import"./js/Exclamation.DGJubTNT.js";import"./js/Checkbox.CmdF-nFt.js";import"./js/Checkmark.DOG99yeO.js";import"./js/Gear.DwDaVskn.js";import"./js/Slide.fjAuzpC8.js";import"./js/Date.B1K6W9Mx.js";import"./js/DatePicker.BPgTva2i.js";import"./js/pick.E0dwuk96.js";import"./js/_baseSet.rYV3oc6X.js";import"./js/_getTag.BWQxgJie.js";import"./js/debounce.CMPzYXJX.js";import"./js/toNumber.BAPajc32.js";import"./js/_baseTrim.BYZhh0MR.js";import"./js/isEqual.DkU1ezAe.js";import"./js/_baseIsEqual.MNbeg0L2.js";import"./js/Tooltip.DhkkBQWW.js";import"./js/Plus.CG1QxokA.js";const $={setup(){return{rootStore:k()}},components:{CoreModal:L,CoreAddRedirection:b},data(){return{addons:E,urls:[],display:!1,target:null,loading:!1,strings:{modalHeader:this.$t.__("Add a Redirect",this.$td),redirectAdded:this.$t.sprintf(this.$t.__('%2$sYour redirect was added and you may edit it <a href="%1$s" target="_blank">here</a>.%3$s',this.$td),this.rootStore.aioseo.urls.aio.redirects,"<strong>","</strong>")},watchClasses:["aioseo-redirects-slug-changed","aioseo-redirects-trashed-post"]}},computed:{classSelectors(){return"."+this.watchClasses.join(", .")}},methods:{reload(){var e,o;this.display=!1;const t=(o=(e=this.target)==null?void 0:e.parentElement)==null?void 0:o.parentElement;if(t&&(t.classList.contains("components-notice__content")||t.classList.contains("notice"))){t.innerHTML="<p>"+this.strings.redirectAdded+"</p>";return}this.target.outerHTML=this.strings.redirectAdded},loadRedirect(t){this.loading=!0,S.get(this.$links.restUrl("redirects/manual-redirects/"+t)).then(e=>{this.urls=e.body.redirects,this.loading=!1}).catch(e=>console.error("Redirect modal failed to load the redirect data.",e))},preloadRedirect(){const t=document.querySelector(this.classSelectors);if(t){const e=this.getElementRedirectHash(t);if(!e)return;this.loadRedirect(e)}},watchClicks(){document.body.onclick=t=>{var o;if(!((o=t.target)!=null&&o.classList))return;let e=!1;this.watchClasses.forEach(i=>{t.target.classList.contains(i)&&(e=!0)}),e&&(t.preventDefault(),this.target=t.target,this.display=!0,H(this.urls)&&this.loadRedirect(this.getElementRedirectHash(this.target)))}},getElementRedirectHash(t){return new URLSearchParams(t.href).get("aioseo-manual-urls")}},async created(){this.preloadRedirect(),this.watchClicks(),window.aioseoBus.$on("wp-core-notice-created",()=>{this.$nextTick(()=>{this.preloadRedirect()})})}},B={key:0,class:"aioseo-redirects-add-redirect-standalone"},T={class:"bd"};function V(t,e,o,i,r,p){const m=a("core-add-redirection"),u=a("core-modal");return r.addons.isActive("aioseo-redirects")?(d(),h("div",B,[f(u,{show:r.display,classes:["aioseo-redirects"],onClose:e[0]||(e[0]=P=>r.display=!1),"allow-overflow":""},{headerTitle:n(()=>[_(g(r.strings.modalHeader),1)]),body:n(()=>[y("div",T,[r.loading?c("",!0):(d(),R(m,{key:0,urls:r.urls,target:r.urls[0].target?r.urls[0].target:"/",disableSource:!0,onAddedRedirect:p.reload},null,8,["urls","target","onAddedRedirect"]))])]),_:1},8,["show"])])):c("",!0)}const N=x($,[["render",V]]),l=document.createElement("div");l.id="aioseo-redirects-add-redirect-standalone";document.body.appendChild(l);let s=C({...N,name:"Standalone/Redirects/AddRedirect"});s=w(s);s=A(s);v(s);s.mount("#aioseo-redirects-add-redirect-standalone");
