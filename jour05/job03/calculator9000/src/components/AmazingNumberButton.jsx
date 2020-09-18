import React from 'react';


function AmazingNumberButton(props){
     const {name} = props
        return (
            <button class="btn btn-light btn-lg" name={name}>{name}</button> 
        )
}

export default AmazingNumberButton;