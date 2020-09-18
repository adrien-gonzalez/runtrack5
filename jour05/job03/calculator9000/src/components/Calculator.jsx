import React from 'react';
import AmazingNumberButton from './AmazingNumberButton';
import GreatOperationButton from './GreatOperationButton';
import MagnificientEqualButton from './MagnificientEqualButton';
import BeautifullScreen from './BeautifullScreen';



class Calculator extends React.Component {
  

   render(){
        return(
           
            <div class="ligne_calcul">
                <BeautifullScreen/>
                <div class="d-flex  justify-content-between mt-2">
                    <AmazingNumberButton name="7"/>
                    <AmazingNumberButton name="8"/>
                    <AmazingNumberButton name="9"/>
                    <GreatOperationButton name="/"/>
                </div>
                <div class="d-flex  justify-content-between mt-2">
                    <AmazingNumberButton name="4"/>
                    <AmazingNumberButton name="5"/>
                    <AmazingNumberButton name="6"/>
                    <GreatOperationButton name="*"/>
                </div>
                <div class="d-flex  justify-content-between mt-2">
                    <AmazingNumberButton name="1"/>
                    <AmazingNumberButton name="2"/>
                    <AmazingNumberButton name="3"/>
                    <GreatOperationButton name="-"/>
                </div>
                <div class="d-flex  justify-content-between mt-2">
                    <AmazingNumberButton name="0"/>
                    <AmazingNumberButton name="."/>
                    <MagnificientEqualButton name="="/>
                    <GreatOperationButton name="+"/>
                </div>
            </div>
        )
    }
}

export default Calculator;
