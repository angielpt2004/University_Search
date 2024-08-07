


const contenedor = document.getElementById("test");
const botonRes = document.getElementById("btn");
const resultadoTest = document.getElementById("resultado");

const preguntas = [
  {
    pregunta: "1. ¿Te gustaria hacer planos?",
    
    respuestas: {
      a: "Si",
      b: "No",
      c: "Un poco",
    },

  },
  {
    pregunta: "2. ¿Te gustan los autos?",
    respuestas: {
        a: "Si",
        b: "No",
        c: "Un poco",
      },
  },
  {
    pregunta: "3. ¿Te gustan los aviones?",
    respuestas: {
        a: "Si",
        b: "No",
        c: "Un poco",
      },
  },
  {
    pregunta: "4. ¿Te gusta la arquitectura?",
    respuestas: {
        a: "Si",
        b: "No",
        c: "Un poco",
      },
  },
  {
    pregunta: "5. ¿Te gustaria enseñarle a alguien?",
    respuestas: {
        a: "Si",
        b: "No",
        c: "Un poco",
      },
  },
  {
    pregunta: "6. ¿Te gustan las matematicas?",
    respuestas: {
        a: "Si",
        b: "No",
        c: "Un poco",
      },
  },
  {
    pregunta: "7. ¿Te gusta la astronomia?",
    respuestas: {
        a: "Si",
        b: "No",
        c: "Un poco",
      },
  },
  {
    pregunta: "8. ¿Te gustaria pelear por los derechos de alguien?",
    respuestas: {
        a: "Si",
        b: "No",
        c: "Un poco",
      },
  },
  {
    pregunta: "9. ¿Te gustaria crear tu propio negocio?",
    respuestas: {
        a: "Si",
        b: "No",
        c: "Un poco",
      },
  },
  {
    pregunta: "10. ¿Te gustan las finanzas?",
    respuestas: {
        a: "Si",
        b: "No",
        c: "Un poco",
      },
  },

	{
	    pregunta: "11. ¿Te gustaria diseñar?",
    respuestas: {
      a: "Si",
      b: "No",
      c: "Un poco",
    },
    
  },
  {
    pregunta: "12. ¿Te gusta la programacion?",
    respuestas: {
      a: "Si",
      b: "No",
      c: "Un poco",
    },
  
  },
  {
    pregunta: "13. ¿Te gusta la robotica?",
    respuestas: {
      a: "Si",
      b: "No",
      c: "Un poco",
    },
  
  },
  {
    pregunta: "14. ¿Te gusta la quimica?",
    respuestas: {
      a: "Si",
      b: "No",
      c: "Un poco",
    },

  },
  {
    pregunta: "15. ¿Te gusta la fisica?",
    respuestas: {
      a: "Si",
      b: "No",
      c: "Un poco",
    },
  
  },
];
function mostrarTest() {
  const preguntasYrespuestas = [];
  preguntas.forEach((preguntaActual, numeroDePregunta) => {
    const respuestas = [];
    for (letraRespuesta in preguntaActual.respuestas) {
      respuestas.push(
        `<label>
                  <input type="radio" name="${numeroDePregunta}" value="${letraRespuesta}" />
                  ${letraRespuesta} : ${preguntaActual.respuestas[letraRespuesta]}
              </label>`
      );
    }
    preguntasYrespuestas.push(
      `<div class="cuestion">${preguntaActual.pregunta}</div>
          <div class="respuestas"> ${respuestas.join("")} </div>
          `
    );
  });
  contenedor.innerHTML = preguntasYrespuestas.join("");
}

mostrarTest();

function mostrarResultado() {
  const respuestas = contenedor.querySelectorAll(".respuestas");
  let respuestasCorrectas = 0;

  preguntas.forEach((preguntaActual, numeroDePregunta) => {
    const todasLasRespuestas = respuestas[numeroDePregunta];
    const checkboxRespuestas = `input[name='${numeroDePregunta}']:checked`;
    const respuestaElegida = (
      todasLasRespuestas.querySelector(checkboxRespuestas) || {}
    ).value;

    if (respuestaElegida === preguntaActual.respuestaCorrecta) {
      respuestasCorrectas++;

      respuestas[numeroDePregunta].style.color = "blue";
    } else {
      respuestas[numeroDePregunta].style.color = "red";
    }
  });

  resultadoTest.innerHTML =
    "Tus resultados seran enviados a tu correo en las proximas horas"
    preguntas.length;
}

botonRes.addEventListener("click", mostrarResultado);