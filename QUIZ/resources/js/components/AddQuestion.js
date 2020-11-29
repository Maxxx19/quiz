import React, { Component } from 'react';

class AddQuestion extends Component {

  constructor(props) {
    super(props);
       this.state = {
          newQuestion: {
              title: '',
              question: '',
          }
        }
    
    this.handleSubmit = this.handleSubmit.bind(this);
    this.handleInput = this.handleInput.bind(this);
  }
  
  handleInput(key, e) {
    
    var state = Object.assign({}, this.state.newQuestion); 
    state[key] = e.target.value;
    this.setState({newQuestion: state });
  }
  handleSubmit(e) {  
    e.preventDefault();
    this.props.onAdd(this.state.newQuestion);
  }

  render() {
    const divStyle = {
      position: 'absolute',
      left: '35%',
      bottom: '5%',
      flexDirection: 'space-between',
      
      marginLeft: '50px'
    }
    
    const inputStyle = {
      margin: '0px 10px 0px 10px'
    }
    return(
      <div> 
       
        <div style={divStyle}> 
         <h2> Додати нове запитання: </h2>
       
        <form onSubmit={this.handleSubmit}>

          <label> 
            Тема: 
           
            <input style={inputStyle} type="text" onChange={(e)=>this.handleInput('title',e)} />
          </label>
          
          <label> 
            Запитання: 
            <input style={inputStyle}  type="text" onChange={(e)=>this.handleInput('question',e)} />
          </label>
          

          <input style={inputStyle}  type="submit" value="Додати" />
        </form>
      </div>
    </div>)
  }
}

export default AddQuestion;
  