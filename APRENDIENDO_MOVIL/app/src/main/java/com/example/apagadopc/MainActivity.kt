package com.example.apagadopc

import android.content.Intent
import android.net.Uri
import android.os.Bundle
import android.view.View
import android.widget.TextView
import androidx.appcompat.app.AppCompatActivity


class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

    }

    public fun cargarPaginaWeb(view: View) {
        val texto:String = findViewById<TextView>(R.id.txtPagina).text.toString()
        val intent = Intent(Intent.ACTION_VIEW, Uri.parse(texto))
        startActivity(intent)
    }

    public fun cargarPaginaApagado(view: View) {
        val intent = Intent(Intent.ACTION_VIEW, Uri.parse("http://192.168.100.9:8181/apagar"))
        startActivity(intent)
    }
    }