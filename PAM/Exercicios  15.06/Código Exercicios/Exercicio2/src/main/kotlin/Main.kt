import kotlin.math.*

fun main() {
    println("Digite seu peso: ")
    val peso = readLine()?.toFloatOrNull()

    println("Digite sua Altura: ")
    val altura = readLine()?.toFloatOrNull()

    if (peso != null && altura != null) {
        val IMC = peso / (altura * altura)
            if (IMC < 18) {
                println("Magreza $IMC")
            } else if (IMC >= 18 && IMC <= 24.9) {
                println("Saudável $IMC")
            } else if (IMC >= 25.0 && IMC <= 29.9) {
                println("Sobrepeso $IMC")
            } else if (IMC >= 30.0) {
                println("Obesidade $IMC")
            }
    }
}