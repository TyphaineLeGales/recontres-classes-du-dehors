wp.blocks.registerBlockType('fabpeda-banner-block/fabpeda-custom-banner', {
    title: 'Banner',
    icon: 'carrot',
    category: 'fabpeda',
    attributes: {
        title : {type : 'string'}, 
        text : {type : 'string'}, 
    }, 
    //admin
    edit: function(props){
        function updateTitle (e) {
            console.log("update title is called")
            props.setAttributes({title : e.target.value})
        }

        function updateText(e) {
            props.setAttributes({text: e.target.value})
        }

        return React.createElement("div", null, /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("label", null, " Banner Title"), /*#__PURE__*/React.createElement("input", {
            type: "text",
            value: props.attributes.title, 
            onChange: updateTitle
          })), /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("label", null, " Banner description"), /*#__PURE__*/React.createElement("input", {
            type: "text",
            value: props.attributes.text, 
            onChange: updateText
          })));

    }, 
    // what will show on the frontend
    save: function(props){
        return React.createElement("div", null, 
        /*#__PURE__*/React.createElement("h1", null, props.attributes.title), 
        /*#__PURE__*/React.createElement("p", null, props.attributes.text));
    }

})