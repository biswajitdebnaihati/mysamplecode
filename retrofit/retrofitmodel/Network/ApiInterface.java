package com.test.retrofitmodel.Network;



import com.test.retrofitmodel.LoginModel;
import com.test.retrofitmodel.ProductListModel;

import okhttp3.RequestBody;
import retrofit2.Call;
import retrofit2.http.Body;
import retrofit2.http.Headers;
import retrofit2.http.POST;

public interface ApiInterface {
    @Headers({
            "Accept: application/json",
            "Content-Type: application/json"
    })
    @POST("get_products")
    Call<ProductListModel> getProductList(@Body RequestBody bodyRequest);
   /* @POST("forget_pwd")
    Call<ForgotPasswordModel> getOtpEmail(@Body RequestBody email);

    @POST("reset_pwd")
    Call<ResetPasswordModel> resetPassword(@Body RequestBody bodyRequest);
*/
    /*@FormUrlEncoded
    @POST("verify_otp")
    Call<VerifyOtpModel> getVerifyOtp(@Field("email") String email,
                                      @Field("otp") String otp);*/

    /*@FormUrlEncoded
    @POST("change_password")
    Call<ChangePasswordModel> setNewPassword(@Field("old_password") String old_password,
                                             @Field("new_password") String new_password);


    @POST("get_products")
    Call<ProductListModel> getProductList(@Body RequestBody bodyRequest);



    @GET("security_qtn")
    Call<ReviewQuestion> ReviewQuestion();
    @GET("profile")
    Call<ProfileModel> getProfile();
    @POST("save_security_qtn")
    Call<SaveQuestion> SaveQuestion(@Body RequestBody bodyRequest);*/
    @POST("login")
    Call<LoginModel> login(@Body RequestBody bodyRequest);
    /*@POST("social_login")
    Call<LoginModel> Social_login(@Body RequestBody bodyRequest);
    @POST("register")
    Call<ServerStatus> Register_email(@Body RequestBody bodyRequest);
    @POST("register_set_pwd")
    Call<SignUpModel> signup(@Body RequestBody bodyRequest);
    @POST("verify_otp")
    Call<VerifyOtpModel> getVerifyOtp(@Body RequestBody bodyRequest);
    @POST("update_profile")
    Call<SignUpModel> Update_profile(@Body RequestBody bodyRequest);

    @Multipart
    @POST("update_profile_img")
    Call<UpdateProfileImgModel> UpdatePrfImage(@Part MultipartBody.Part profile_img);

    @POST("save_wishlist")
    Call<SaveToWishlistModel> saveToWishlist(@Body RequestBody bodyRequest);

    @GET("get_wishlist")
    Call<wishListModel2> getwishList();

    @POST("delete_wishlist")
    Call<DeleteWishlistModel> deleteWishlist(@Body RequestBody requestBody);*/

}

