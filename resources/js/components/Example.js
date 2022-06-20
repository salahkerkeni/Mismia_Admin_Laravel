import React from 'react';
import ReactDOM from 'react-dom';
import {Button} from "@mui/material";

function Example() {
    return (
        <Button variant="contained" color="primary">
            Hello World
        </Button>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.querySelector('#example'));
}
