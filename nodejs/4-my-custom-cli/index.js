#!/usr/bin/env node

const printFiveMoves = async (pokemonName) => {
    const moves = await fetch(`https://pokeapi.co/api/v2/pokemon/${pokemonName}`).then(res => res.json()).then(data => data.moves.slice(0, 5).map(move => move.move.name)).catch(err => console.log(err));
    console.log(moves);
}

printFiveMoves("ditto");
