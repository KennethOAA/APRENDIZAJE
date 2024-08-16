package com.example.apagado

import android.content.Intent
import android.os.Bundle
import android.view.View
import android.widget.AdapterView
import android.widget.ArrayAdapter
import android.widget.Button
import android.widget.EditText
import android.widget.Spinner
import android.widget.Toast
import androidx.activity.ComponentActivity
import okhttp3.*
import java.io.IOException

class SecondActivity : ComponentActivity() {
    private lateinit var spinner1: Spinner
    private lateinit var controlTiempo: String

    private var mensajeC:String? = null
    private lateinit var mensajeINC:String

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_second)
        encerarValores()

        spinner1.onItemSelectedListener = object : AdapterView.OnItemSelectedListener {
            override fun onItemSelected(parent: AdapterView<*>?, view: android.view.View?, position: Int, id: Long) {
                controlTiempo = parent?.getItemAtPosition(position).toString()
            }

            override fun onNothingSelected(parent: AdapterView<*>?) {
                // Código a ejecutar cuando no se selecciona ningún ítem
            }
        }
    }

    private fun encerarValores(){
        spinner1 = findViewById(R.id.spnFranja)
        val adapter = ArrayAdapter(
            this,
            android.R.layout.simple_spinner_item,
            resources.getStringArray(R.array.franja_options)
        )
        spinner1.adapter = adapter

        val textField2: EditText = findViewById(R.id.txtEntradaControl)
        textField2.setText("0")
        setupSpinner()
        setupButtonNavigation(R.id.btnRegresar, MainActivity::class.java)
        seleccionarBotonEspecificado(R.id.btnAhora, MainActivity::class.java)
    }

    private fun seleccionarBotonEspecificado(buttonId: Int, activityClass: Class<*>) {
        val button: Button = findViewById(buttonId)
        button.setOnClickListener {
            val ipPCX: EditText = findViewById(R.id.txtIp)
            val ipPC: String = ipPCX.text.toString()
            var finalCompPost = "http://$ipPC:8088/"
            val actionType = intent.getStringExtra("ACCION_SELECCIONADA")
            if (actionType == "APAGAR") {
                finalCompPost += "shutdown"
            } else if (actionType == "REINICIAR") {
                finalCompPost += "restart"
            } else if (actionType == "SUSPENDER") {
                finalCompPost += "suspend"
            }
            val tiempoCX:EditText = findViewById(R.id.txtEntradaControl)
            val tiempoC:String = tiempoCX.text.toString()


            // HASTA AQUI ES LA CONFIGURACION PARA SELECCIONAR LO DE UN SPINNER
            sendPostRequest(finalCompPost, tiempoC, controlTiempo)
        }
    }


    private fun sendPostRequest(url: String, tiempo: String, unidad: String) {
        Toast.makeText(this, "URL: $url - T: $tiempo --- U: $unidad", Toast.LENGTH_SHORT).show()
        val client = OkHttpClient()
        val formBody = FormBody.Builder()
            .add("tiempo", tiempo)
            .add("unidad", unidad)
            .build()
        val request = Request.Builder()
            .url(url)
            .post(formBody)
            .build()
        client.newCall(request).enqueue(object : Callback {
            override fun onFailure(call: Call, e: IOException) {
                runOnUiThread {
                    Toast.makeText(this@SecondActivity, "Error: ${e.message}", Toast.LENGTH_SHORT).show()
                }
            }

            override fun onResponse(call: Call, response: Response) {
                if (response.isSuccessful) {
                    val responseData = response.body?.string()
                    runOnUiThread {
                        Toast.makeText(this@SecondActivity, "Response: $responseData", Toast.LENGTH_SHORT).show()
                    }
                } else {
                    runOnUiThread {
                        Toast.makeText(this@SecondActivity, "Error code: ${response.code}", Toast.LENGTH_SHORT).show()
                    }
                }
            }
        })
    }




    private fun setupButtonNavigation(buttonId: Int, activityClass: Class<*>) {
        val button: Button = findViewById(buttonId)
        button.setOnClickListener {
            val intent = Intent(this, activityClass)
            startActivity(intent)
        }
    }

    private fun setupSpinner() {
        val spinner: Spinner = findViewById(R.id.spnFranja)
        val adapter = ArrayAdapter.createFromResource(
            this,
            R.array.franja_options,
            android.R.layout.simple_spinner_item
        )
        adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item)
        spinner.adapter = adapter
    }


}



