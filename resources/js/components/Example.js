import React from 'react';
import ReactDOM from 'react-dom';
import autoComplete from "@tarekraafat/autocomplete.js";

new autoComplete({
    console.log("hi");
    selector: "#autoComplete",
    placeHolder: "Search for Food...",
    data: {
        src: ["Sauce - Thousand Island", "Wild Boar - Tenderloin", "Goat - Whole Cut"]
    },
    resultsList: {
        noResults: (list, query) => {
            // Create "No Results" message list element
            const message = document.createElement("li");
            message.setAttribute("class", "no_result");
            // Add message text content
            message.innerHTML = `<span>Found No Results for "${query}"</span>`;
            // Add message list element to the list
            list.appendChild(message);
        },
    },
    resultItem: {
        highlight: {
            render: true
        }
    }
});

function Example() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example Component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
