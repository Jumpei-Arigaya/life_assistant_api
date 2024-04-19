from rest_framework import routers
from .views import MemoViewSet

router = routers.DefaultRouter()
router.register("memo", MemoViewSet)
urlpatterns = router.urls
