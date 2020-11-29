import React, { Component , useState } from 'react';

class Answer extends Component {
    constructor(props) {
        super(props);
        this.outputEventAnswer = this.outputEventAnswer.bind(this);
        this.counter= this.props.counter;
      }
outputEventAnswer(){
        this.props.Event(++this.counter)
        }          
handleChange(){
            this.setState({
                counter: this.props.counter
            });
}
render() {
    const divStyle = {
        position: 'absolute',
        left: '35%',
        top: '30%',
        flexDirection: 'space-between',
        marginLeft: '60px'
      }
  
  
  if(!this.props.answer) {
    return(<div style={divStyle}> Зробіть вибір!
        
           </div>);
} 
  
  return(  
    <form  style={divStyle}  key = {this.props.answer.id}> 
      <input  type="checkbox" onClick={ this.outputEventAnswer } />
      <label><h6> {this.props.answer.true_answer}</h6></label><br></br>
      <input  type="checkbox"  />
      <label><h6> {this.props.answer.wrong_answer} </h6></label><br></br>
      <input  type="checkbox"  />
      <label><h6> {this.props.answer.wrong_answer1} </h6></label><br></br>
      <input  type="checkbox"  />
      <label><h6> {this.props.answer.wrong_answer2} </h6></label><br></br>
      <input type="submit" value="Онулити" /><br></br>
      <p><h4>  Ви набрали {this.props.counter} балів </h4></p>
    </form>
    
  )
}
}

export default Answer ;