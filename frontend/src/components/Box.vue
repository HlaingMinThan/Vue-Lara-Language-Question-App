<template>
  <div
   class="mt-20
      p-5
      m-3 rounded-3xl md:w-[80%] md:h-[80%] md:rounded-none  bg-white flex flex-col md:flex-col-reverse"
  >
    <LikeUnlikeCount />
    <div  class="
      flex flex-col
      justify-center
      items-center
      space-y-8
    ">
      <div class="md:h-[570px]">
        <img
          src="https://s3-alpha-sig.figma.com/img/2983/484c/02f1f51da2aaae1b0f190e4b632adfa8?Expires=1669593600&Signature=ait98ugYiA8I31kLgsua6NQ7xCZKWggao8hq4yy5wO1ddMx8zm3LZ1dSZ6QyrcfJo956fpC5Zsrb~s~kIFmPcHEyd2QQCYlELFqy9pCGgx2g8aulRX-8xdpQVBpSekfXQOphUwABG4M6QFEi09H4FcxSNk~nQUcYm5gHEmEY9oGaVIOdPOxjOOxWrscKWFhu9xACPnqpQA6qTVLSgIYV9jJiSGmrbF4WKpiA344FKHqHU1WZqTxov-tki0snyFbCMsX~G0aDS9ArvYNs7Mzru-OtgyxfNFBIbFTlPYYYejZvBqaCcOGyvT4X0VXr0R~QZRdmOxgY2S3guUEs28epSQ__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA"
          class="rounded-lg md:object-contain md:h-full md:w-full md:rounded-none"
        />
      </div>
      <h1 class="text-3xl">happy</h1>
      <input type="text" class="w-[60%] shadow-md shadow-[#e28a5067] py-3" />
      <button class="px-16 py-4 text-white bg-[#FF6700] text-xl rounded-md">
        Let's See
      </button>
        </div>
    </div>
</template>

<script>
import LikeUnlikeCount from "./LikeUnlikeCount.vue";

export default {
  components: { LikeUnlikeCount },
};
</script>

<style>
</style>