fun main(args: Array<String>) {
    println("Digite a quantidade de camisas pequenas: ")
    val camPe = readLine()?.toIntOrNull()

    println("Digite a quantidade de camisas médias: ")
    val camMe = readLine()?.toIntOrNull()

    println("Digite a quantidade de camisas grandes: ")
    val camGa = readLine()?.toIntOrNull()

    if (camPe != null && camMe != null && camGa != null){
        val valorTotal = (camPe*10) + (camMe*12) + (camGa*15)
        println("O valor total a pagar será de: $valorTotal")
    }
}