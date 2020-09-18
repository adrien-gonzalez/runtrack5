import React from 'react';

function MagnificientEqualButton(props){
    const {name} = props
    return (
        <button class="btn btn-danger btn-lg" name={name}>{name}</button> 
    )
}

export default MagnificientEqualButton;