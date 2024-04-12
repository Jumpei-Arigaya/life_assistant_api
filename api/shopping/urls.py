from rest_framework import routers
from .views import ShopViewSet

router = routers.DefaultRouter()
router.register("shop", ShopViewSet)
urlpatterns = router.urls

