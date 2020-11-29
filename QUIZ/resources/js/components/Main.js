import React, { Component,   useEffect} from 'react';
import ReactDOM from 'react-dom';
import Question from './Question';
import AddQuestion from './AddQuestion';
import Answer from './Answer';


class Main extends Component {

  constructor() {
  
    super();

    this.state = {
        questions: [],
        answers: [],
        currentQuestion: null,
        currentAnswer:   null,
        counter: 0,
        count: 0,

    }
     this.handleAddQuestion = this.handleAddQuestion.bind(this);
     this.handleAddAnswer = this.handleAddAnswer.bind(this);
     this.outputEvent = this.outputEvent.bind(this);
     this.state.count = this.state.counter;
    }
    outputEvent(event) {
      this.setState({ counter: event });
  }
  
  componentDidMount() {
    
    fetch("http://127.0.0.1:8000/api/questions")
        .then(response => {
            return response.json();
        })
        .then(questions => {
           
          this.setState({ questions });
        },
        (error) => {
          this.setState({
            isLoaded: true,
            error
          });
        }
        );
        fetch("http://127.0.0.1:8000/api/answers")
        .then(response => {
            return response.json();
        })
        .then(answers => {
           
          this.setState({ answers });
        },
        (error) => {
          this.setState({
            isLoaded: true,
            error
          });
        }
        );
  }

 renderQuestions() {
        const listStyle = {
            listStyle: 'none',
            fontSize: '18px',
            lineHeight: '1.8em',
        }
    return this.state.questions.map(question => {
        return (
           
            <li style={listStyle} onClick={
                () =>this.handleClick(question)} key={question.id} >
                { question.id }.{ question.title } 
            </li>    
              
        );
    })
  }
  handleClick(question) {

      this.setState({currentQuestion:question});
      const elementsIndex = this.state.answers.findIndex(element => element.id == question.id );
      this.setState({currentAnswer:this.state.answers[elementsIndex]});
      
  }

  
   handleAddQuestion(question) {
     
    fetch( "http://127.0.0.1:8000/api/questions", {
        method:'post',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        
        body: JSON.stringify(question)
    })
    .then(response => {
        return response.json();
    })
    .then( data => {
       
        this.setState((prevState)=> ({
            questions: prevState.questions.concat(data),
            currentQuestion : data
        }))
    })

  }  
  handleAddAnswer(answer) {
    
    fetch( "http://127.0.0.1:8000/api/answers", {
        method:'post',
        
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        
        body: JSON.stringify(answer)
    })
    .then(response => {
        return response.json();
    })
    .then( data => {
       
        this.setState((prevState)=> ({
            answers: prevState.answers.concat(data),
            currentAnswer : data
        }))
    })

  }  
    
  render() {

   const mainDivStyle =  {
        display: "flex",
        flexDirection: "row"
    }
    
    const divStyle = {
       
        justifyContent: "flex-start",
        padding: '10px',
        width: '35%',
        background: '#f0f0f0',
        padding: '20px 20px 20px 20px',
        margin: '30px 10px 10px 30px'
        
    }
    const { error, isLoaded, items } = this.state;
    if (error) {
      return <div>Помилка: {error.message}</div>;
    
    } else {

    return (
        <div>
          <div style= {mainDivStyle}>
            <div style={divStyle}>
                <h3> Всі запитання </h3>
                  <ul>
                    { this.renderQuestions() }
                  </ul> 

            </div> 
              <Question question={this.state.currentQuestion} />
              
                 <Answer counter={this.state.counter} Event={this.outputEvent} answer={this.state.currentAnswer} />     
                
                <AddQuestion onAdd={this.handleAddQuestion} /> 
          </div>
              
        </div>
      
    );
    }
  }
}

export default Main;

if (document.getElementById('root')) {
    ReactDOM.render(<Main />, document.getElementById('root'));
}