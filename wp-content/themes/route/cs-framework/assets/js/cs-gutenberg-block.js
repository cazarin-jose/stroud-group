!function(t,o,e,r){var t=t.registerBlockType,s=o.PlainText,c=e.createElement,n=e.RawHTML,i=r.Button;t("route/shortcode-block",{title:"Route Shortcodes",category:"widgets",keywords:["shortcode","route theme"],description:"Click to add shortcode button for route theme shortcodes.",icon:"screenoptions",supports:{html:!1,className:!1,customClassName:!1},attributes:{shortcode:{string:"string",source:"text"}},edit:function(o){return c("div",{className:"route-shortcode-block"},c(i,{className:"button is-button is-default is-large gutenberg-shortcode-button",onClick:function(){window.routeShortcodeBlock=o}},"Add Shortcode"),c(s,{placeholder:"Write shortcode here...",className:"input-control blocks-shortcode__textarea",onChange:function(t){o.setAttributes({shortcode:t})},value:o.attributes.shortcode}))},save:function(t){return c(n,{},t.attributes.shortcode)}})}(window.wp.blocks,window.wp.blockEditor,window.wp.element,window.wp.components);