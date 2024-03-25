const slideText = document.querySelectorAll('.is-style-offset');

class characterShifter{
    constructor(source){
      this.source = source;
      this.text;
      this.string;
      this.words = [];
      this.chars = [];
      this.elements = [];
      this.background = getComputedStyle(this.source).backgroundColor;
    }
    
    setString(){
      let link = this.source.querySelector('a');

      if(link != null){
        this.text = this.source.querySelector('a');
      }else{
        this.text = this.source;
      }

      this.string = this.text.innerHTML;
    }


    breakSentences(){
      this.words = [];
      let words = this.string.split(' ');
      this.words = words;
    }
    
    breakChars(){
      this.chars = [];
      this.words.forEach((word)=>{
        let chars = Array.from(word);
        this.chars.push(Array.from(word));
      });
    }
    
    createElement(charIncriment=0.05, wordIcriment=0.5){
      
      this.elements = [];
      
      let wordOffset = 0;
      let charOffset = 0;

      if(this.text.tagName === "A"){
        wordIcriment=0.0;
      }else{
        wordIcriment=0.5;
      }


      console.log(this.text.tagName);
      
      this.chars.forEach((array)=>{
        
        let wordElement = document.createElement('span');
        wordElement.classList.add('offsetWordBox');
        array.forEach((char)=>{
          let charBox = document.createElement('span');
          charBox.classList.add('offsetCharBox');
          charBox.style.setProperty('animation-delay', `${wordOffset+charOffset}s`);
          charBox.style.setProperty('transition-delay', `${wordOffset+charOffset}s`);
          charBox.innerHTML +=`
          <span>${char}</span>
          <span>${char}</span>
          <span>${char}</span>
          `
          wordElement.appendChild(charBox);
          
          charOffset+=charIncriment;
        });
        this.elements.push(wordElement);
        charOffset = 0;
        wordOffset+=wordIcriment;
      });
    }
    
    build(){
      this.setString();
      this.breakSentences();
      this.breakChars();
      this.createElement();
      this.text.innerHTML = '';
      this.elements.forEach((element)=>{
        this.text.appendChild(element);
      });
    }
    
    init(){
      this.build();
    }
    
    
    
  }


slideText.forEach((text)=>{
    let textBlock = new characterShifter(text);
    textBlock.init();
})