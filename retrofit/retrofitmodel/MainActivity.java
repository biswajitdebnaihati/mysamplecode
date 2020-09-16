package com.test.retrofitmodel;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.hardware.Camera;
import android.media.projection.MediaProjection;
import android.os.Bundle;
import android.util.DisplayMetrics;
import android.util.Log;
import android.view.Gravity;
import android.view.SurfaceHolder;
import android.view.SurfaceView;
import android.widget.TextView;
import android.widget.Toast;

import com.test.retrofitmodel.Network.ApiManager;

import java.io.IOException;

import okhttp3.MediaType;
import okhttp3.RequestBody;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class MainActivity extends AppCompatActivity {
    RequestBody bodyRequest;
    Call<LoginModel> coll=null;
    ApiManager apiManager=new ApiManager();


    TextView testView;

    Camera camera;
    SurfaceView surfaceView;
    SurfaceHolder surfaceHolder;

    Camera.PictureCallback rawCallback;
    Camera.ShutterCallback shutterCallback;
    Camera.PictureCallback jpegCallback;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        LoginServerCall();
    }
    private void LoginServerCall()
    {

        Toast t=Toast.makeText(getApplicationContext(), "E...4", Toast.LENGTH_LONG);
        t.setGravity(Gravity.BOTTOM, 0, 50);
        t.show();
        String ss=" {\n" +
                "                \"email\": \"9674375433\",\n" +
                "                \"password\": \"123456\"\n" +
                "              }";
        //   loader.showDialog(this);
        bodyRequest = RequestBody.create(MediaType.parse("application/json"), ss.toString());
        coll=apiManager.service.login(bodyRequest);

        coll.enqueue(new Callback<LoginModel>()
        {
            @Override
            public void onResponse(Call<LoginModel> call, Response<LoginModel> response)
            {
                Toast t=Toast.makeText(getApplicationContext(), "E...: "+response.body().parameters.get("name"), Toast.LENGTH_LONG);
                t.setGravity(Gravity.TOP, 0, 50);
                t.show();
            }

            @Override
            public void onFailure(Call<LoginModel> call, Throwable t)
            {
                Log.d("errMsg",""+t.getMessage());
            }
        });

    }


}