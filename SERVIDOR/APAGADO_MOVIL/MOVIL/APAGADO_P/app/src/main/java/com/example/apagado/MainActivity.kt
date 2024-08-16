package com.example.apagado

import android.content.Intent
import android.os.Bundle
import android.widget.ArrayAdapter
import android.widget.Button
import android.widget.Spinner
import androidx.activity.ComponentActivity


class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        setupButtonNavigation(R.id.btnApagar, SecondActivity::class.java,"APAGAR")
        setupButtonNavigation(R.id.btnReiniciar, SecondActivity::class.java,"REINICIAR")
        setupButtonNavigation(R.id.btnSuspender, SecondActivity::class.java,"SUSPENDER")
    }

    private fun setupButtonNavigation(buttonId: Int, activityClass: Class<*>, action: String) {
        val button: Button = findViewById(buttonId)
        button.setOnClickListener {
            val intent = Intent(this, activityClass)
            intent.putExtra("ACCION_SELECCIONADA", action)
            startActivity(intent)
        }
    }
}
