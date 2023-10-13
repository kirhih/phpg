package com.asiae.ai23

import android.R
import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.Image
import androidx.compose.foundation.border
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Row
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.width
import androidx.compose.material3.Card
import androidx.compose.material3.MaterialTheme
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.runtime.remember
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.platform.LocalContext
import androidx.compose.ui.res.painterResource
import androidx.compose.ui.text.style.TextAlign
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import com.asiae.ai23.ui.theme.AI23Theme


class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            AI23Theme {
                // A surface container using the 'background' color from the theme
                Surface(modifier = Modifier.fillMaxSize(), color = MaterialTheme.colorScheme.background) {
                    Greeting("Asia경제 여러분")
                }
            }
        }
    }
}
@Composable
fun ImgCard(i:Int=1){
    var name="m"+i.toString()
    //Log.e(name)
    val context = LocalContext.current
    val drawableId = remember(name) {
        context.resources.getIdentifier(
            name,
            "drawable",
            context.packageName
        )
    }
    Card (modifier = Modifier
        .padding(10.dp)
        .border(0.dp, Color.White)
        .padding(5.dp)){
        Box(modifier = Modifier.width(100.dp)) {
            Image(
                painter = painterResource(id = drawableId),
                contentDescription = "musical1"
            )
            Box(modifier = Modifier.align(Alignment.BottomCenter)) {
                Text(
                    text = "안녕하세요 "+i.toString(),
                    color = Color.White,
                    textAlign = TextAlign.Center,
                    modifier = Modifier.fillMaxWidth()
                )
            }
        }
    }

}

@Composable
fun Greeting(name: String, modifier: Modifier = Modifier) {
    Column (modifier = Modifier.padding(5.dp)){
        Row (){
            for (i in 1..3){
                ImgCard(i)
            }

        }
        Row {
            ImgCard()
            ImgCard()
            ImgCard()
        }
    }


}

@Preview(showBackground = true)
@Composable
fun GreetingPreview() {
    AI23Theme {
        Greeting("Android")
    }
}