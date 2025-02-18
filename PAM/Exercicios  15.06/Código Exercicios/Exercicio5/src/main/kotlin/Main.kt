fun main(args: Array<String>) {
    println("Digite o peso do prato montado: ")
    val peso = readLine()?.toFloatOrNull()

    if (peso != null){
        val valor = peso * 12
        println("O valor a pagar será de: $valor")
    }else{
        println("Valor inválido")
    }
}