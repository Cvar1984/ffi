#define FFI_SCOPE "LIBCURL"
#define FFI_LIB "libcurl.so"

int *curl_easy_init();
int curl_easy_setopt(int *ch, int const CURLOPT, ...);
int curl_easy_perform(int *ch);
void curl_easy_cleanup(int *ch);
