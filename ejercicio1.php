    <!-- Author: Carlo Castro Galindo  -->
    <script>
        var participantes = [10, 20, 80, 2, 0, 1, -3]
        var numero = 80
        var ronda = 5

        var ganadores = null
        var suma = numero // to compare case negative
        var adicional = 0 // initialize in 0

        participantes.sort() // sort participants

        var primer_elemento = participantes[0] // to compare case negative

        if (suma < 0 && suma >= primer_elemento) { // to compare case negative
            var adicional = Math.abs(participantes[0]) 
            for (var i = 0; i < participantes.length; i++) {
                participantes[i] = participantes[i] + adicional // all elements in array is positive now
            }
        }
        numero = numero + ronda * adicional // if the array has been changed, numero also

        var resultado = concurso(participantes,ronda,numero) // start concurso

        if (suma < 0 && suma >= primer_elemento) {
            for (var i = 0; i < resultado[0].length; i++) {
                resultado[0][i] = resultado[0][i] - adicional; // return the initial value of each element
            }
        }
        document.write("Los ganadores son " + resultado)

        function concurso(numeros, ronda, sum, parcial_sum) {
            var s, n, nuevos_numeros

            parcial_sum = parcial_sum || []
            s = parcial_sum.reduce(function(a,b){return a + b;},0);

            if (s > sum || parcial_sum.length > ronda) return null

            if (s === sum && parcial_sum.length == ronda) {
                if(!ganadores) {
                    ganadores = []
                }
                ganadores.push(parcial_sum)
            }

            for (var i = 0; i < numeros.length; i++) {
                n = numeros[i]
                nuevos_numeros = numeros.slice(i + 1)
                concurso(nuevos_numeros, ronda, sum, parcial_sum.concat([n]))
            }

            return ganadores
        }
    </script>