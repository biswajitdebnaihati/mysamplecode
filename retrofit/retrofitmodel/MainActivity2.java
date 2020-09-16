package com.test.retrofitmodel;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.util.Log;
import android.widget.Toast;

import com.test.retrofitmodel.Network.ApiManager;

import org.json.JSONException;
import org.json.JSONObject;

import okhttp3.MediaType;
import okhttp3.RequestBody;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class MainActivity2 extends AppCompatActivity {
    ApiManager manager = new ApiManager();
    RequestBody bodyRequest,bodyRequest2;
    ApiManager apiManager=new ApiManager();

    Call<ProductListModel> coll2=null;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);
        try {
            showProductList("018208015436");
        } catch (JSONException e) {
            e.printStackTrace();
        }
    }
    private void showProductList(String scanCode) throws JSONException {

        JSONObject scancode_obj=new JSONObject();
        scancode_obj.put("scancode",scanCode);
        //Log.d("errMsgAAA",""+scancode_obj.toString());
        bodyRequest2 = RequestBody.create(MediaType.parse("application/json"), scancode_obj.toString());
        coll2=apiManager.service.getProductList(bodyRequest2);
        coll2.enqueue(new Callback<ProductListModel>()
        {
            @Override
            public void onResponse(Call<ProductListModel> call, Response<ProductListModel> response)
            {
                Toast.makeText(MainActivity2.this, "AAA"+response.body().getMessage(), Toast.LENGTH_SHORT).show();
            }

            @Override
            public void onFailure(Call<ProductListModel> call, Throwable t)
            {
                Log.d("errMsg","AAA : "+t.getMessage());

            }
        });


    }

}