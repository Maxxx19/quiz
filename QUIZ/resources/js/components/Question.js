import React, { Component } from 'react';


const Question = ({question}) => {
   
  const divStyle = {
      display: 'flex',
      flexDirection: 'column',
      width: '65%',
      margin: '30px 10px 10px 30px',
      backgroundColor: 'rgb(208, 249, 249)'
  }
  
  
  if(!question) {

    return(<div style={divStyle}><h2>  Не вибрано жодного запитання </h2> </div>);
  }
  
  
  return(  
    <div style={divStyle}> 
      <h2> Тема: {question.title} </h2>
      <div> <h5>Виберіть вірну відповідь:</h5> {question.question} </div>
      
     
    </div>
  )
}

export default Question ;