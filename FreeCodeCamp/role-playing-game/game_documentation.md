# 🔰 Role Playing Game

This is a role playing game built by JavaScript, HTML and CSS. This is part of a project by <a href="https://www.freecodecamp.org"> `freecodecamp`</a>. There are 3 main files used to design the game:

- index - HTML
- game_logic - JavaScript
- game_design - CSS

## 1. HTML and CSS code

Has a main div called game with other divs within the game div. The divs within the game div are stats, controls, monsterStats, and text.<br>

- stats-> Display the players and the monsters' stats while playing the game.
- controls-> Game functionality, the player is able to do things such as fight the monster or buy weapons.
- Text-> based on the controls we configure, our main text area changes its content given an action by the user.

### CSS Functionality

CSS has been added to modify visibility, particularly the monsterStats variable. It may or may not appear based on the actions that the player input.

## 2. Game Engine

This has been developed using the JavaScript file and concepts in JavaScript such as Object Notation and basics on Algorithms and Data Structures.

### JavaScript

I named the JavaScript file `game_logic.js` . The game contains functionality configurations based on the input the player will show.

### Linking JavaScript with HTML

The file path is put at the end of the HTML file so that it is initiated once everything is run in HTML.

It is done using a script element as shown below.

```HTML
<script src="game_logic.js"></script>
```

### Getting HTML elements using DOM

Currently, the game has 3 main buttons. These buttons are designed in HTML and CSS but we can add backend functionality to them using JavaScript DOM.
We do this by first adding a queryselector function that selects ID content.

Here is an example.

```JavaScript
const button1 = document.querySelector('#button1');
const button2 = document.querySelector("#button2");
const button3 = document.querySelector("#button3");
```

### Adding functionality based on user action

We then proceed to develop actions upon selection of buttons and the Data Structures between various game components.

```JavaScript
// initialize buttons
button1.onclick = goStore;
button2.onclick = goCave;
button3.onclick = fightDragon;

//Data Structure of a game element
const weapons = [
  { name: 'stick', power: 5 },
  { name: 'dagger', power: 30 },
  { name: 'claw hammer', power: 50 },
  { name: 'sword', power: 100 }
];
```

### Clicking a button

Based on the initialization of buttons, we then add the functionality with which we have assigned. This includes and is not limited to:<br>

1. Creating Functions
2. Using JavaScript Objects to keep code clean
3. Iteration over objects in arrays.
4. Assigning functions to actions.

Here is a glimpse of the `goStore` Function.

```JavaScript
function goStore() {
  update(locations[1]);
}
```

In our program, we had declared a location variable in which we put an arry of objects that have keys and values (Locations inclueded as keys).

Here is the locations structure

```JavaScript
const locations = [
  {
    name: "town square",
    "button text": ["Go to store", "Go to cave", "Fight dragon"],
    "button functions": [goStore, goCave, fightDragon],
    text: "You are in the town square. You see a sign that says \"Store\"."
  }
];
```

Other functionalities within the game are buying weapons, selling weapons (based on the condition that you have defeated a monster), fighting the monster, among many others.

### Contributions

Feel free to contribute by making pull requests and suggesting improvements on potential anomalies.

### License

This project is under the MIT license.

### Author

> <a href="https://www.linkedin.com/in/benirodeny"> Benir Odeny</a>
