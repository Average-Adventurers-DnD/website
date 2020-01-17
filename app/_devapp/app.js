import React, { Component, Fragment } from 'react';
import { render } from 'react-dom';
import { asyncComponent } from 'react-async-component';

/** Import index.php vars */
import TestVariable from 'TestVariable';

/* globals __webpack_public_path__ */
__webpack_public_path__ = `${window.STATIC_URL}/app/assets/bundle/`;

class Myapp extends Component {
    render() {
        const Test = TestVariable;
        console.log(Test);

        return (
            <div className="dashboard">
               {Test.Name}
            </div> 
        )
    }
}

render(<Myapp/>, document.getElementById('app'));